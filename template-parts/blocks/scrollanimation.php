<?php
/**
 * Hero Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$video_url = get_field('video_url') ?: 'https://vz-bf52cb50-0a5.b-cdn.net/ce1749fb-077d-416a-8df8-bc32ac669c3c/playlist.m3u8';
$poster_image = get_field('poster_image');
$hero_title = get_field('hero_title') ?: 'Evolving Dynamic Digital Spectacles';
$featured_project = get_field('featured_project');
$featured_label = get_field('featured_label') ?: 'New Project';
$social_links = get_field('social_links');

$theme_url = get_template_directory_uri() . '/analogNXTTheme';

// Default poster image if not set
$poster_src = $poster_image ? $poster_image['url'] : $theme_url . '/images/692f05c4b38ee040469f3443_main.avif';
?>

<!-- Include GSAP Core, ScrollTrigger, and Observer -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/Observer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

<!-- Sections -->
<section class="first scroll-section">
  <div id="tsparticles"></div>
  <div class="outer">
    <div class="inner">
      <div
        class="home_title_column u-column-8 u-zindex-2 w-flex w-flex-column u-justify-center u-align-items-center bg "
        style="gap: 20px;">
        <h1 class="global-h1 hero-heading section-heading"> Hello</h1>
        <p class="global-txt1">Boundaries between physical and digital worlds dissolve into a symphony of
          creativity.
        </p>
      </div>
    </div>
  </div>
</section>


<section class="second scroll-section">
  <div class="outer">
    <div class="inner">
      <div class="bg">
        <h2 class="section-heading">Animated with GSAP</h2>
      </div>
    </div>
  </div>
</section>
<div style="height: 200vh;"></div>

<!-- GSAP Animations -->
<script>
  tsParticles.load("tsparticles", {
    background: {
      color: "#000",
      repeat: "no-repeat",
      size: "40%",
      position: "60% 50%"
    },
    interactivity: {
      events: {
        onClick: { enable: true, mode: "repulse" },
        onHover: { enable: true, mode: "bubble" }
      },
      modes: {
        bubble: { distance: 200, duration: 2, opacity: 0, size: 0, speed: 3 },
        repulse: { distance: 400, duration: 0.4 }
      }
    },
    particles: {
      color: { value: "#ffffff" },
      move: { direction: "none", enable: true, outModes: "out", random: true, speed: 0.3 },
      number: { density: { enable: true }, value: 600 },
      opacity: { value: { min: 0.3, max: 0.6 }, animation: { enable: true, speed: 1, minimumValue: 0.3, sync: false } },
      shape: { type: "circle" },
      size: { value: 1 }
    }
  });


</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(Observer);

    const sections = gsap.utils.toArray("section");
    const images = gsap.utils.toArray(".bg");
    const headings = gsap.utils.toArray(".section-heading");
    const outerWrappers = gsap.utils.toArray(".outer");
    const innerWrappers = gsap.utils.toArray(".inner");
    let currentIndex = 0; // start at first section
    let animating = false;

    // Only animate first 2 sections
    const maxIndex = 1; // zero-based index

    // Initial positions
    gsap.set(outerWrappers, { yPercent: 100 });
    gsap.set(innerWrappers, { yPercent: -100 });
    gsap.set(sections, { autoAlpha: 0 });

    // Show first section
    gsap.set(sections[0], { autoAlpha: 1, zIndex: 1 });
    gsap.set(outerWrappers[0], { yPercent: 0 });
    gsap.set(innerWrappers[0], { yPercent: 0 });

    function gotoSection(index, direction) {
      if (index < 0 || index > maxIndex) return; // stop animation outside first 2 sections
      animating = true;
      const fromTop = direction === -1;
      const dFactor = fromTop ? -1 : 1;

      const tl = gsap.timeline({
        defaults: { duration: 1.25, ease: "power1.inOut" },
        onComplete: () => animating = false
      });

      if (currentIndex !== index) {
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

Observer.create({
    type: "wheel,touch,pointer",
    wheelSpeed: -1,
    onDown: () => {
        if (!animating && currentIndex > 0) gotoSection(currentIndex - 1, -1);
    },
    onUp: () => {
        if (!animating) {
            if (currentIndex < 1) {
                gotoSection(currentIndex + 1, 1);
            } else {
                this.kill(); // stop Observer; normal page scroll resumes
            }
        }
    },
    tolerance: 10,
    preventDefault: true
});


  });
</script>


<!-- CSS -->
<style>
  .scroll-section {
    height: 100%;
    width: 100%;
    top: 0;
    position: fixed;
  }

  .scroll-section .outer,
  .scroll-section .inner {
    width: 100%;
    height: 100%;
    overflow-y: hidden;
  }

  .scroll-section .bg {
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

  .scroll-section .bg h2 {
    z-index: 999;
  }

  .scroll-section .bg .clip-text {
    overflow: hidden;
  }

  .first .bg {
    background-color: transparent;
  }

  .second .bg {
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.6) 50%, rgba(0, 0, 0, 0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-2.jpg");
  }

  .third .bg {
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.6) 50%, rgba(0, 0, 0, 0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-3.jpg");
  }

  .fourth .bg {
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.6) 50%, rgba(0, 0, 0, 0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-4.jpg");
  }

  .fifth .bg {
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.6) 50%, rgba(0, 0, 0, 0.1) 100%), url("https://assets.codepen.io/16327/site-landscape-5.jpg");
    background-position: 50% 45%;
  }

  h2 * {
    will-change: transform;
  }
</style>