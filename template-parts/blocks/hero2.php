<?php
$heading = get_field('heading');
$subheading = get_field('subheading');
$bg_image = get_field('bg_image');
$bg_url = $bg_image ? $bg_image['url'] : '';
?>

<section id="scroll-down" class="hero2-section u-zindex-3 w-flex u-align-items-end"
    style="background-image: url('<?php echo esc_url($bg_url); ?>'); background-size: cover; background-position: center; height: 100vh;">
    <div class="overlay"></div> <!-- Added overlay -->
    <div class="u-container abt-maincstm hero2-inner u-gap-8  w-flex u-flex-column">
        <h1 class="hero2-heading global-h1"><?php echo wp_kses_post($heading); ?></h1>
        <p class="hero2-subheading global-txt"><?php echo wp_kses_post($subheading); ?></p>
    </div>
</section>
<style>
    .hero2-inner {
        padding: 70px 20px;
        width: 100%;
        max-width: 1440px;

    @media (max-width: 768px) {
		#scroll-down{
			height:80vh !important;
		}
    }

    @media (max-width: 1024px) {
        .hero2-inner {
            padding: 60px 20px;
        }
    }
      #scroll-down {
        position: relative; /* Ensure that the overlay is positioned correctly */
    }

    /* The overlay style */
    #scroll-down .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
        z-index: 1; /* Make sure it's below the content */
    }

    /* Ensure content stays on top of the overlay */
    #scroll-down .u-container {
        position: relative;
        z-index: 2; /* Content should be above the overlay */
    }
</style>