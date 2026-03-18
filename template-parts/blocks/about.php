<?php
/**
 * About Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$eyebrow_text = get_field('eyebrow_text') ?: 'About Us';
$heading = get_field('heading') ?: 'Art Comes First — Creative Agency';
$description = get_field('description') ?: '<p>We specialize in transforming spaces into digital masterpieces. Founded in 2013, Zeit has become one of Vietnam\'s leading agencies in creative advertising, event organization, and brand consultancy.</p>';
$button_text = get_field('button_text') ?: 'Learn More';
$button_link = get_field('button_link') ?: '/about';
?>

<section class="about-section u-section u-zindex-3">
    <div class="u-section-spacer"></div>

    <div class="u-container abt-maincstm w-flex u-flex-row-reverse u-flex-column-reverse-m u-align-center-m">
        <div class="abtinner-left u-align-items-center">
            <div class="c-paragraph w-richtext u-rich-text u-max-width-60ch u-opacity-80 u-margin-bottom-7 global-txt1">
                <?php echo wp_kses_post($description); ?>
            </div>
            <a href="/services-spatial-experiences">
                <div class="abtinnerl-img w-flex u-justify-content-between w-flex-column"
                    style="background-image:url(https://analognxt.com/wp-content/uploads/2026/01/Group-2-2.webp); padding:20px; background-position: center center; background-size: cover;">
                    <div class="abtbg-arrow w-flex u-justify-content-end">
                        <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i>

                    </div>
                    <div class="abt-bg">
                        <h3>Spatial Experiences</h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="about_heading w-flex u-flex-column u-flex-column-m u-align-center-m">
            <div id="button-container">
                <button class="primary-button">
                    Our Services
                </button>
            </div>

            <h2 class="home_about_heading global-h1"><?php echo esc_html($heading); ?></h2>
            <a href="/services-system-integration">
                <div class="abtinnerl-img abtinnerl-img2 w-flex u-justify-content-between w-flex-column"
                    style="background-image:url(https://analognxt.com/wp-content/uploads/2026/02/Image-1-1-9.webp); padding:20px;">
                    <div class="abtbg-arrow w-flex u-justify-content-end">
                        <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i>

                    </div>
                    <div class="abt-bg">
                        <h3>System Integrations</h3>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <div class="u-section-spacer"></div>
</section>
<style>
    a {
        text-decoration: none;
    }

    .about-section {
        opacity: 0;
        animation: fadeIn 10s ease-in-out forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
            /* Optional: add slight upward movement */
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>