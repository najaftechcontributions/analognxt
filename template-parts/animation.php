<?php
/**
 * Template Name: GSAP Page
 */

get_header();
?>
<!-- 1️⃣ GSAP core -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.14.0/gsap.min.js"></script>

<!-- 2️⃣ GSAP Observer plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.14.0/Observer.min.js"></script>

<!-- 3️⃣ SplitText plugin (from CodePen example) -->
<script src="https://assets.codepen.io/16327/SplitText.min.js"></script>

<!-- 4️⃣ Your animation -->
<script>
window.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(Observer);

  let sections = document.querySelectorAll("section"),
      images = document.querySelectorAll(".bg"),
      headings = gsap.utils.toArray(".section-heading"),
      outerWrappers = gsap.utils.toArray(".outer"),
      innerWrappers = gsap.utils.toArray(".inner"),
      splitHeadings = headings.map(heading => new SplitText(heading, { type: "chars,words,lines", linesClass: "clip-text" })),
      currentIndex = -1,
      wrap = gsap.utils.wrap(0, sections.length),
      animating;

  gsap.set(outerWrappers, { yPercent: 100 });
  gsap.set(innerWrappers, { yPercent: -100 });

  function gotoSection(index, direction) {
    index = wrap(index);
    animating = true;
    let fromTop = direction === -1,
        dFactor = fromTop ? -1 : 1,
        tl = gsap.timeline({
          defaults: { duration: 1.25, ease: "power1.inOut" },
          onComplete: () => animating = false
        });

    if (currentIndex >= 0) {
      gsap.set(sections[currentIndex], { zIndex: 0 });
      tl.to(images[currentIndex], { yPercent: -15 * dFactor })
        .set(sections[currentIndex], { autoAlpha: 0 });
    }

    gsap.set(sections[index], { autoAlpha: 1, zIndex: 1 });

    tl.fromTo([outerWrappers[index], innerWrappers[index]], 
      { yPercent: i => i ? -100 * dFactor : 100 * dFactor }, 
      { yPercent: 0 }, 0)
      .fromTo(images[index], { yPercent: 15 * dFactor }, { yPercent: 0 }, 0)
      .fromTo(splitHeadings[index].chars, 
        { autoAlpha: 0, yPercent: 150 * dFactor },
        { autoAlpha: 1, yPercent: 0, duration: 1, ease: "power2", stagger: { each: 0.02, from: "random" } }, 0.2);

    currentIndex = index;
  }

  Observer.create({
    type: "wheel,touch,pointer",
    wheelSpeed: -1,
    onDown: () => !animating && gotoSection(currentIndex - 1, -1),
    onUp: () => !animating && gotoSection(currentIndex + 1, 1),
    tolerance: 10,
    preventDefault: true
  });

  // Start at first section
  gotoSection(0, 1);
});
</script>

<header>
  <div>Animated Sections</div>
  <div><a href="https://codepen.io/BrianCross/pen/PoWapLP">Original Inspiration</a></div>
</header>
<section class="first">
  <div class="outer">
    <div class="inner">
      <div class="bg one">
        <h2 class="section-heading">Scroll down</h2>
      </div>
    </div>
  </div>

</section>
<section class="second">
  <div class="outer">
    <div class="inner">
      <div class="bg">
        <h2 class="section-heading">Animated with GSAP</h2>
      </div>
    </div>
  </div>
</section>
<section class="third">
  <div class="outer">
    <div class="inner">
      <div class="bg">
        <h2 class="section-heading">GreenSock</h2>
      </div>
    </div>
  </div>
</section>
<section class="fourth">
  <div class="outer">
    <div class="inner">
      <div class="bg">
        <h2 class="section-heading">Animation platform</h2>
      </div>
    </div>
  </div>
</section>
<section class="fifth">
  <div class="outer">
    <div class="inner">
      <div class="bg">
        <h2 class="section-heading">Keep scrolling</h2>
      </div>
    </div>
  </div>
</section>

<style>section {
  height: 100%;
  width: 100%;
  top: 0;
  position: fixed;
  visibility: hidden;
}

section .outer,
section .inner {
  width: 100%;
  height: 100%;
  overflow-y: hidden;
}

section .bg {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  background-size: cover;
  background-position: center;
}

section .bg h2 {
  z-index: 999;
}

section .bg .clip-text {
  overflow: hidden;
}

section.first .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-1.jpg");
}

section.second .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-2.jpg");
}

section.third .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-3.jpg");
}

section.fourth .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-4.jpg");
}

section.fifth .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-5.jpg");
  background-position: 50% 45%;
}
</style>