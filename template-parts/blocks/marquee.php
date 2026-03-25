<?php
/**
 * Marquee Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$marquee_items = get_field( 'marquee_items' );
$scaling_video = get_field( 'scaling_video' );

$theme_url = get_template_directory_uri() . '/analogNXTTheme';

// Default marquee items if none set
if ( ! $marquee_items ) {
    $marquee_items = array(
        array(
            'type' => 'text',
            'text' => 'Transforming spaces',
            'image' => null
        ),
        array(
            'type' => 'image',
            'text' => '',
            'image' => array(
                'url' => $theme_url . '/images/68c8f23224ac0da127d2d801_Rectangle%2038.avif',
                'alt' => 'Marquee Image'
            )
        ),
        array(
            'type' => 'text',
            'text' => 'into digital masterpieces',
            'image' => null
        ),
        array(
            'type' => 'image',
            'text' => '',
            'image' => array(
                'url' => $theme_url . '/images/692f05c4b38ee040469f3443_main.avif',
                'alt' => 'Marquee Image'
            )
        )
    );
}

// Default scaling video if not set
$video_src = $scaling_video ? $scaling_video['url'] : $theme_url . '/media/COVER%20FINAL%202.mp4';

// Split items into two rows for marquee effect
$half = ceil( count( $marquee_items ) / 2 );
$row1_items = array_slice( $marquee_items, 0, $half );
$row2_items = array_slice( $marquee_items, $half );
?>

<section class="marquee-section u-section u-zindex-2">
    <div class="u-section-spacer"></div>

    <!-- Marquee Row 1 (Right Direction) -->
    <div data-marquee-duplicate="2"
         data-marquee-direction="right"
         data-marquee-status="normal"
         data-marquee-speed="15"
         data-marquee-scroll-speed="10"
         class="marquee-advanced">
        <div class="marquee-advanced__scroll">
            <div class="marquee-advanced__collection">
                <?php foreach ( $row1_items as $item ) : ?>
                    <?php if ( $item['type'] === 'text' ) : ?>
                        <p class="marquee__advanced__p"><?php echo esc_html( $item['text'] ); ?></p>
                    <?php else : ?>
                        <div class="home_marquee_image_wrap">
                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>"
                                 alt="<?php echo esc_attr( $item['image']['alt'] ?: 'Marquee Image' ); ?>"
                                 class="u-cover-absolute">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Duplicated content for seamless loop -->
            <div class="marquee-advanced__collection" aria-hidden="true">
                <?php foreach ( $row1_items as $item ) : ?>
                    <?php if ( $item['type'] === 'text' ) : ?>
                        <p class="marquee__advanced__p"><?php echo esc_html( $item['text'] ); ?></p>
                    <?php else : ?>
                        <div class="home_marquee_image_wrap">
                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>"
                                 alt=""
                                 class="u-cover-absolute">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Second duplicate for smoother loop -->
            <div class="marquee-advanced__collection" aria-hidden="true">
                <?php foreach ( $row1_items as $item ) : ?>
                    <?php if ( $item['type'] === 'text' ) : ?>
                        <p class="marquee__advanced__p"><?php echo esc_html( $item['text'] ); ?></p>
                    <?php else : ?>
                        <div class="home_marquee_image_wrap">
                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>"
                                 alt=""
                                 class="u-cover-absolute">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Marquee Row 2 (Left Direction) -->
    <?php if ( ! empty( $row2_items ) ) : ?>
    <div data-marquee-duplicate="2"
         data-marquee-direction="left"
         data-marquee-status="normal"
         data-marquee-speed="15"
         data-marquee-scroll-speed="10"
         class="marquee-advanced">
        <div class="marquee-advanced__scroll u-text-trim-off">
            <div class="marquee-advanced__collection">
                <?php foreach ( $row2_items as $item ) : ?>
                    <?php if ( $item['type'] === 'text' ) : ?>
                        <p class="marquee__advanced__p"><?php echo esc_html( $item['text'] ); ?></p>
                    <?php else : ?>
                        <div class="home_marquee_image_wrap">
                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>"
                                 alt="<?php echo esc_attr( $item['image']['alt'] ?: 'Marquee Image' ); ?>"
                                 class="u-cover-absolute">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Duplicated content for seamless loop -->
            <div class="marquee-advanced__collection" aria-hidden="true">
                <?php foreach ( $row2_items as $item ) : ?>
                    <?php if ( $item['type'] === 'text' ) : ?>
                        <p class="marquee__advanced__p"><?php echo esc_html( $item['text'] ); ?></p>
                    <?php else : ?>
                        <div class="home_marquee_image_wrap">
                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>"
                                 alt=""
                                 class="u-cover-absolute">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Second duplicate for smoother loop -->
            <div class="marquee-advanced__collection" aria-hidden="true">
                <?php foreach ( $row2_items as $item ) : ?>
                    <?php if ( $item['type'] === 'text' ) : ?>
                        <p class="marquee__advanced__p"><?php echo esc_html( $item['text'] ); ?></p>
                    <?php else : ?>
                        <div class="home_marquee_image_wrap">
                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>"
                                 alt=""
                                 class="u-cover-absolute">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Scaling Video -->
    <div class="scaling-element__small-box">
        <div class="scaling-video__before is-1"></div>
        <div data-flip-element="wrapper" class="scaling-video__wrapper">
            <div data-flip-element="target" class="scaling-video">
                <video src="<?php echo esc_url( $video_src ); ?>"
                       autoplay
                       loop
                       muted
                       playsinline
                       webkit-playsinline
                       class="u-height-full u-zindex-1"></video>
                <div class="scaling-video-overlay"></div>
            </div>
        </div>
    </div>

    <div class="u-section-spacer"></div>
</section>
<style>
    .marquee__advanced__p{
        font-size: 60px;
		text-transform: uppercase;
    }
    .marquee-section{
        height: auto !important;
    }
    @media (max-width: 768px) {
        .scaling-element__small-box {
            display: none !important;
        }
    }
</style>
