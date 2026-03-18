<?php
/**
 * Services Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$eyebrow_text = get_field('eyebrow_text') ?: 'What we do';
$heading = get_field('heading') ?: 'We create, produce, and design experiences that make brands hit different.';
$button_text = get_field('button_text') ?: '[ All Services ]';
$button_link = get_field('button_link') ?: '/services';
$services_items = get_field('services_items');

$theme_url = get_template_directory_uri() . '/analogNXTTheme';

// Default services if none set
if (!$services_items) {
    $services_items = array(
        array(
            'number' => '01',
            'title' => 'Concept Development',
            'items' => "Creative event concept development\nFull-scale event planning and execution",
            'image' => array(
                'url' => $theme_url . '/images/68d67020885f73c3326608fe_events.avif',
                'alt' => 'Concept Development'
            )
        ),
        array(
            'number' => '02',
            'title' => 'Programming',
            'items' => "Integrated marketing communication strategy development and execution\nBrand positioning, slogan development, and high-impact campaigns",
            'image' => array(
                'url' => $theme_url . '/images/68d670207078d1331688e8ac_marcom.avif',
                'alt' => 'Programming'
            )
        ),
        array(
            'number' => '03',
            'title' => 'Visualization',
            'items' => "Brand identity development\nConcept creation and design consultancy",
            'image' => array(
                'url' => $theme_url . '/images/68d670202730f6dc9e99a380_CD.avif',
                'alt' => 'Visualization'
            )
        ),
        array(
            'number' => '04',
            'title' => 'Art',
            'items' => "TVCs, Brand Films, and Corporate Video Production\nTV Show Production",
            'image' => array(
                'url' => $theme_url . '/images/68d67020333b7248b8860fbf_production.avif',
                'alt' => 'Art'
            )
        )
    );
}
?>

<section class="services-section u-section w-flex u-flex-column w-align-center w-justify-center">
    <div class="u-section-spacer"></div>

    <div class="section_contain u-zindex-6 w-flex u-flex-column w-align-items-center w-justify-center">

        <div class="u-section-spacer"></div>

        <div class="u-display-contents">
            <div class="u-content-wrapper u-zindex-3 cstm-econ1" style="margin:0; width: 100%;">
                <?php foreach ($services_items as $service):
                    $items_array = explode("\n", $service['items']);
                    ?>
                    <div data-home-service class="sticky-card-wrap">
                        <div class="sticky-card">
                            <div class="services_item w-flex u-justify-between u-flex-column-m u-flex-column-t">
                                <div class="heading-bulletlist-wrapper w-flex u-flex-column u-justify-center"
                                    style="gap:1.5em">
                                    <div class="services_number_wrap">
                                        <?php
                                        // Get the button text from ACF
                                        $eyebrow_text = get_field('eyebrow_text');
                                        ?>

                                        <?php if ($eyebrow_text): // Only show button if field has a value ?>
                                            <div id="button-container">
                                                <button class="primary-button">
                                                    <?php echo esc_html($eyebrow_text); ?>
                                                </button>
                                            </div>
                                        <?php endif; ?>

                                        <div class="service_wrap_inner w-flex u-flex-row u-align-items-center u-gap-2-s"
                                            style="gap:0.5em">
                                            <div class="u-opacity-60"><?php echo esc_html($service['number']); ?></div>
                                            <div class="line-aftr-serviceno"
                                                style="height:1px; border: 1px solid #BFBFBF; width: 100%; max-width: 500px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="services_heading_wrap">
                                        <div>
                                            <?php
                                            global $post;
                                            $page_slug = isset($post->post_name) ? $post->post_name : '';

                                            // Set class based on multiple page slugs
                                            $heading_class = ($page_slug === 'services-spatial-experiences' || $page_slug === 'services-system-integration')
                                                ? 'global-h1'
                                                : 'global-h2';
                                            ?>

                                            <h2 class="<?php echo esc_attr($heading_class); ?> u-margin-bottom-4"
                                                style="width:100%; max-width:700px;">
                                                <?php echo wp_kses_post($service['title']); ?>
                                            </h2>



                                            <div class="u-rich-text u-opacity-80 w-richtext">
                                                <ul role="list">
                                                    <?php foreach ($items_array as $item):
                                                        if (!empty(trim($item))):
                                                            ?>
                                                            <li><?php echo esc_html(trim($item)); ?></li>
                                                            <?php
                                                        endif;
                                                    endforeach;
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="services_image_wrap u-column-6 w-flex u-justify-center u-align-center">
                                    <img src="<?php echo esc_url($service['image']['url']); ?>"
                                        alt="<?php echo esc_attr($service['image']['alt'] ?: $service['title']); ?>"
                                        class="services_image">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="u-section-spacer"></div>
</section>
<style>
    /* Target 2nd, 4th, 6th, etc. children */
    [data-home-service]:nth-child(even) .services_item {
        background-color: #fff;
        padding: 80px 100px;
        color: #000;
        display: flex !important;
        flex-direction: row-reverse;
    }

    @media (max-width:768px) {
        [data-home-service]:nth-child(even) .services_item {
            flex-direction: column;
            padding: 40px 20px;
        }
    }

    @media (max-width: 768px) {
        [data-home-service]:nth-child(2) .services_item {
            padding: 40px 20px;
            flex-direction: column !important;
        }
    }

    @media (max-width: 1024px) {
        [data-home-service]:nth-child(2) .services_item {
            padding: 40px 20px;
            flex-direction: column;
        }
    }

    .services_item {
        width: 100%;
        padding: 0 100px;
        gap: 50px;
    }

    @media (max-width: 767px) {
        .services_item {
            gap: 20px;
            /* Set gap to 20px for mobile */
        }
    }

    @media (max-width: 1024px) {
        .services_item {
            padding: 0 20px;
        }
    }
</style>