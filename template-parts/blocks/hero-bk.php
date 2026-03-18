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

<section class="hero-section u-section u-min-height-screen u-zindex-3">
  <div id="tsparticles"></div>
  <div class="u-section-spacer"></div>

  <div class="home_hero_contain u-container">
    <!-- Background Video -->


    <!-- Hero Title and Featured Project -->
    <div class="home_hero_title_wrap w-flex u-justify-center u-align-center" style="text-align:center; ">
      <div class="home_title_column u-column-8 u-zindex-2 w-flex w-flex-column u-justify-center u-align-items-center "
        style="gap: 20px;">
        <h1 class="global-h1 hero-heading"><?php echo esc_html($hero_title); ?></h1>
        <p class="global-txt1">Boundaries between physical and digital worlds dissolve into a symphony of creativity.
        </p>
      </div>

    </div>

    <img class="behindheading-img" src="http://analog.local/wp-content/uploads/2026/01/Rectangle-1.webp">
  </div>
</section>
<!-- tsParticles library -->
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>



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

</style>