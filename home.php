<?php
/**
 * Template Name: Homepage
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
<section class="first">
  <div class="outer">
    <div class="inner">
      <div class="bg">
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
* {
  box-sizing: border-box;
  user-select: none;
}

a {
  color: var(--color-surface-white);
  text-decoration: none;
}

body {
  margin: 0;
  padding: 0;
  height: 100vh;
  color: var(--light);
  text-transform: uppercase;
}

h2 {
  font-size: clamp(1rem, 6vw, 10rem);
  font-weight: 600;
  line-height: 1.2;
  text-align: center;
  margin-right: -0.5em;
  width: 90vw;
  max-width: 1200px;
  text-transform: none;
}

header {
  position: fixed;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 5%;
  width: 100%;
  z-index: 3;
  height: 7em;
  font-size: clamp(0.66rem, 2vw, 1rem);
  letter-spacing: 0.5em;
}

section {
  height: 100%;
  width: 100%;
  top: 0;
  position: fixed;
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

.first .bg {
 background-color: transparent;
}

.second .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-2.jpg");
}

.third .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-3.jpg");
}

.fourth .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-4.jpg");
}

.fifth .bg {
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-5.jpg");
  background-position: 50% 45%;
}

h2 * {
  will-change: transform;
}
</style>

<?php get_footer(); ?>
