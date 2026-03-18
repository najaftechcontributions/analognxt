<?php
/**
 * Template Name: Homepage 2
 *
 * A fully working homepage with animated sections using free GSAP plugins.
 *
 * @package AnalogNXT
 */

get_header();
?>

<!-- Include GSAP Core, ScrollTrigger, and Observer -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/Observer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

<!-- Sections -->
<!-- <section class="first">
  <div class="outer">
    <div class="inner">
      <div class="bg">
        <h2 class="section-heading">Scroll down</h2>
      </div>
    </div>
  </div>
</section> -->


<section class="hero-section u-section u-min-height-screen u-zindex-3 first">
  <div id="tsparticles"></div>
  <div class="u-section-spacer"></div>

  <div class="home_hero_contain u-container outer">
    <!-- Background Video -->


    <!-- Hero Title and Featured Project -->
    <div class="home_hero_title_wrap w-flex u-justify-center u-align-center inner" style="text-align:center; ">
      <div class="home_title_column u-column-8 u-zindex-2 w-flex w-flex-column u-justify-center u-align-items-center bg "
        style="gap: 20px;">
        <h1 class="global-h1 hero-heading section-heading"> Hello</h1>
        <p class="global-txt1">Boundaries between physical and digital worlds dissolve into a symphony of creativity.
        </p>
      </div>

    </div>

    <img class="behindheading-img" src="http://analog.local/wp-content/uploads/2026/01/Rectangle-1.webp">
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


<!-- GSAP Animations -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  gsap.registerPlugin(Observer);

  const sections = gsap.utils.toArray("section");
  const images = gsap.utils.toArray(".bg");
  const headings = gsap.utils.toArray(".section-heading");
  const outerWrappers = gsap.utils.toArray(".outer");
  const innerWrappers = gsap.utils.toArray(".inner");
  const wrap = gsap.utils.wrap(0, sections.length);
  let currentIndex = -1;
  let animating = false;

  // Initial positions
  gsap.set(outerWrappers, { yPercent: 100 });
  gsap.set(innerWrappers, { yPercent: -100 });
  gsap.set(sections, { autoAlpha: 0 });

  function gotoSection(index, direction) {
    index = wrap(index);
    animating = true;
    const fromTop = direction === -1;
    const dFactor = fromTop ? -1 : 1;

    const tl = gsap.timeline({
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
      .fromTo(headings[index], 
        { autoAlpha: 0, y: 50 }, 
        { autoAlpha: 1, y: 0, duration: 1, ease: "power2.out" }, 
        0.2
      );

    currentIndex = index;
  }

  // Observer for scroll / touch
  Observer.create({
    type: "wheel,touch,pointer",
    wheelSpeed: -1,
    onDown: () => !animating && gotoSection(currentIndex - 1, -1),
    onUp: () => !animating && gotoSection(currentIndex + 1, 1),
    tolerance: 10,
    preventDefault: true
  });

  // Show first section
  gotoSection(0, 1);
});
</script>

<!-- CSS -->
<style>
  .behindheading-img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 525px;
    height: 525px;
    object-fit: cover;
    opacity: 0.6;
    z-index: -1;
  }
section {
  height: 100%;
  width: 100%;
  top: 0;
  position: fixed;
  color:white !important;
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
.first .bg {
 background-color: black;
}

.second .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-2.jpg");
}

</style>

<?php get_footer(); ?>
