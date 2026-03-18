<?php
/**
 * Works/Portfolio Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$eyebrow_text = get_field('eyebrow_text') ?: 'Our Works';
$heading = get_field('heading') ?: 'Selected Cases';
$button_text = get_field('button_text') ?: '[ All Projects ]';
$button_link = get_field('button_link') ?: '/works';
$works_items = get_field('works_items');

$theme_url = get_template_directory_uri() . '/analogNXTTheme';

// Default works if none set
if (!$works_items) {
    $works_items = array(
        array(
            'title' => 'HANOI CONVENTION',
            'client' => 'Ministry of Public Security',
            'year' => '2025',
            'category' => 'Events',
            'link' => '/work/hanoi-convention',
            'image' => array(
                'url' => $theme_url . '/images/691e117fe3f9d636a04d2d86_z7156631364795_53c865ad0c0e608f5fd3ec24e2311fd3-min.avif',
                'alt' => 'HANOI CONVENTION'
            )
        ),
        array(
            'title' => 'REALITY TV SHOWS THE BRAVE WARRIOR',
            'client' => 'Ministry of Public Security',
            'year' => '2025',
            'category' => 'Production',
            'link' => '/work/reality-tv-shows-the-brave-warrior',
            'image' => array(
                'url' => $theme_url . '/images/691d7798bbe72104cbb57d05_503229610_122108103626885664_7718728219984834969_n.avif',
                'alt' => 'REALITY TV SHOWS THE BRAVE WARRIOR'
            )
        ),
        array(
            'title' => 'MSB PRIVATE CONCERT: TÂM THỨC TINH HOA',
            'client' => 'MSB',
            'year' => '2025',
            'category' => 'Events',
            'link' => '/work/msb-private-concert-tam-thuc-tinh-hoa',
            'image' => array(
                'url' => $theme_url . '/images/691d45f7b4527762d84ce9d8_486004484_1127650026054359_3544324425917187362_n.avif',
                'alt' => 'MSB PRIVATE CONCERT'
            )
        )
    );
}

?>

<section class="works-section u-section u-zindex-3">
    <div class="u-section-spacer"></div>
    <div class="u-section-spacer"></div>

    <div class="u-container">
        <!-- <div>
            <div class="eyebrow_wrap u-margin-bottom-4">
                <div class="eyebrow_layout">
                    <div class="eyebrow_marker"></div>
                    <div class="eyebrow_text u-text-style-main w-richtext">
                        <p><?php echo esc_html($eyebrow_text); ?></p>
                    </div>
                </div>
            </div>
            <h2 class="u-text-style-h2 u-margin-bottom-6"><?php echo esc_html($heading); ?></h2>
        </div> -->

        <div class="home_work_component w-dyn-list">
            <div class="home_work_grid u-grid-custom w-dyn-items">
                <?php foreach ($works_items as $work): ?>
                    <div class="home_work_item u-column-3 w-dyn-item">
                        <a href="<?php echo esc_url($work['link']); ?>" class="work_item w-inline-block">
                            <div class="work_image_wrap">
                                <img src="<?php echo esc_url($work['image']['url']); ?>"
                                    alt="<?php echo esc_attr($work['image']['alt'] ?: $work['title']); ?>"
                                    class="u-cover-absolute">
                            </div>

                            <div class="work_item_info">
                                <div>
                                    <div class="work_info_wrap">
                                        <div><?php echo esc_html($work['year']); ?></div>
                                        <div><?php echo esc_html($work['category']); ?></div>
                                    </div>
                                    <div>
                                        <div class="cs_title u-text-trim-off">
                                            <?php echo esc_html($work['client']); ?>
                                        </div>
                                        <div class="cs_client u-text-style-large u-text-trim-off global-h2">
                                            <?php echo esc_html($work['title']); ?>
                                        </div>

                                    </div>
                                </div>

                                <div class="cs_btn_wrap">
                                    <div class="cs_btn_text">View Case</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 24 24" fill="none"
                                        class="u-icon-medium u-zindex-1">
                                        <path fill="#000"
                                            d="m13.895 16.5-1.056-1.06 2.677-2.69H5.625v-1.5h9.892l-2.678-2.69 1.056-1.06 4.48 4.5-4.48 4.5Z">
                                        </path>
                                    </svg>
                                    <div class="cs_btn_bg"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- <div class="u-alignment-center u-margin-top-5">
            <div class="button_main_wrap" data-button>
                <div class="clickable_wrap u-cover-absolute">
                    <a href="<?php echo esc_url($button_link); ?>" class="clickable_link w-inline-block">
                        <span class="clickable_text u-sr-only"><?php echo esc_html($button_text); ?></span>
                    </a>
                    <button type="button" class="clickable_btn">
                        <span class="clickable_text u-sr-only"><?php echo esc_html($button_text); ?></span>
                    </button>
                </div>
                <div aria-hidden="true" class="button_main_text u-text-style-main"><?php echo esc_html($button_text); ?></div>
                <div class="button_bg"></div>
            </div>
        </div> -->
    </div>

    <div class="u-section-spacer"></div>
</section>
<style>
    .global-h2 {
        font-weight: 400 !important;
    }

    .u-grid-custom {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: var(--site--gutter);
    }

    /* Prevent all items from spanning */
    .u-grid-custom>* {
        grid-column: auto !important;
    }

    /* Desktop: make only last item span 2 columns */
    @media screen and (min-width: 768px) {
        .u-grid-custom>*:last-child {
            grid-column: span 2 !important;
        }
    }

    /* Mobile: 1 column stacked */
    @media screen and (max-width: 767px) {
        .home_work_grid.u-grid-custom {
            display: grid;
            grid-template-columns: 1fr;
            /* single column */
            gap: var(--site--gutter);
        }

        /* All children full width */
        .home_work_grid.u-grid-custom>* {
            width: 100%;
            grid-column: auto;
            /* reset span for mobile */
        }

        /* Last child full width too */
        .home_work_grid.u-grid-custom>*:last-child {
            width: 100%;
            grid-column: auto;
            /* reset span for mobile */
        }
    }

    /* Only on the "Our Projects" page, inside #works-section */
    body.page-id-285 .works-section .u-cover-absolute {
        object-fit: cover !important;
    }

    body.page-id-323 .works-section .u-cover-absolute {
        object-fit: cover !important;
    }

    /* Blog page: 3-column grid */
    body.page-id-323 .u-grid-custom {
        grid-template-columns: repeat(3, 1fr) !important;
    }
    /* Prevent last child from spanning */
    body.page-id-323 .u-grid-custom>*:last-child {
        grid-column: auto !important;
    }
</style>