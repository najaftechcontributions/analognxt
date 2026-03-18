<?php
/**
 * Final CTA Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$heading = get_field('heading') ?: 'Have a project in mind?';
$video = get_field('video');
$button_text = get_field('button_text') ?: 'Get In Touch';
$button_link = get_field('button_link') ?: '/contact-us';

$theme_url = get_template_directory_uri() . '/analogNXTTheme';

// Default video if not set
$video_src = $video ? $video['url'] : $theme_url . '/media/3d-zeit.mp4';

// Split heading into lines (assuming it's split by spaces or new lines)
$heading_parts = explode(' ', $heading);
?>
<?php
// Get ACF fields
$heading = get_field('heading');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$map_iframe = get_field('map_iframe'); // optional iframe field
?>

<section class="final-cta-section u-section u-zindex-7">
    <div class="cta_wrap w-flex u-flex-row u-align-center-t">

        <!-- Left Column: Heading + Button -->
        <div class="cta-left w-flex u-flex-column" style="gap:18em;">
            <?php if ($heading): ?>
                <h2 class="cta-heading global-h1">
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            <?php endif; ?>

            <?php if ($button_text && $button_link): ?>
          <a href="<?php echo esc_url($button_link); ?>" class="cta-button">
    <span class="cta-button-text"><?php echo esc_html($button_text); ?></span>
    <span class="cta-button-arrow">→</span>
</a>
            <?php endif; ?>


        </div>

        <!-- Right Column: Map -->
        <div class="cta-right">
            <?php if ($map_iframe): ?>
                <div class="map-wrapper">
                    <?php echo $map_iframe; ?>
                </div>
            <?php else: ?>
                <div class="anx-contact-map__right w-block">
                    <div class="anx-contact-map__map w-block">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1850246.6366147576!2d55.227488!3d25.076022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1770928280239!5m2!1sen!2sin"
                            width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<style>
    .cta-left {
        margin: auto;
        padding: 0 20px;
    }

    @media (max-width:1200px) {
        .final-cta-section {
            padding: 120px 20px;
        }

        .cta-left {
            gap: 20px !important;
        }

        .cta_wrap {
            flex-direction: column !important;
            gap: 50px !important;
            align-items: center !important;
        }

        .cta-left {
            text-align: center !important;
        }

        .cta-button {
            justify-content: center;
        }
    }
@media (max-width: 768px) {
        .final-cta-section {
            padding: 20px 20px;
        }
            }


    .cta-button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        /* space between text and arrow */
        padding: 16px 40px;
        font-size: 40px;
        /* large text */
        font-weight: bold;
        background: #0073e6;
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .cta-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        /* space between text and arrow */
        font-size: 40px;
        font-weight: bold;
        color: #F29740;
        text-decoration: none;
        /* remove default underline */
        padding: 0;
        background: none;
        transition: all 0.3s ease;
    }

    .cta-button-text {
        /* custom underline using border */
        border-bottom: 2px solid #F29740;
        /* thin underline */
        padding-bottom: 4px;
        /* space between text and underline */
        transition: border-color 0.3s ease;
    }

    .cta-button:hover .cta-button-text {
        border-color: #F29740;
        /* darken underline on hover */
        color: #F29740;
        /* darken text too */
    }

    .cta-button-arrow {
        display: inline-block;
        transform: rotate(-42deg);
        transition: color 0.3s ease, transform 0.3s ease;
        color: #F29740;
    }

    /* On hover: arrow moves slightly and changes color */
    .cta-button:hover .cta-button-arrow {
        color: #F29740;
        transform: rotate(-42deg) translateX(4px);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .cta-button {
            font-size: 28px;
        }
    }

    @media (max-width: 480px) {
        .cta-button {
            font-size: 22px;
        }
    }
</style>