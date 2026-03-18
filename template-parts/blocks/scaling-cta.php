<?php
/**
 * Scaling CTA Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$heading = get_field( 'heading' ) ?: 'EVERY PIXEL, EVERY LINE,';
$subheading = get_field( 'subheading' ) ?: 'EVERY DETAIL CRAFTED WITH PRECISION AND ACCURACY';
?>

<section class="scaling-cta-section section_scale u-section">
    <div class="scaling-element__big-box">
        <div data-flip-element="wrapper" class="scaling-video__wrapper"></div>
        <div class="scaling-video__before"></div>

        <div class="scailing_text_wrap">
            <div class="scailing_text_contain u-container" style="text-align: center;">
                <div class="_3d_heading_wrap is-1">
                    <div class="u-overflow-clip">
                        <div data-scailing-text class="scailing_text"><?php echo esc_html( $heading ); ?></div>
                    </div>
                </div>

                <div class="_3d_heading_wrap is-last">
                    <div class="u-overflow-clip">
                        <div data-scailing-text class="scailing_text"><?php echo esc_html( $subheading ); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
	@media (max-width:767px){
		.scaling-cta-section {
    background-image: url('https://analognxt.com/wp-content/uploads/2026/01/Desktop-14-1-scaled.webp');
    background-size: cover;        /* Make it cover the whole section */
    background-position: center;   /* Center the image */
    background-repeat: no-repeat;  /* Prevent tiling */
    background-attachment: fixed;  /* Optional: parallax effect */
    transition: transform 0.5s ease; /* Smooth hover effect */
}

.scaling-cta-section:hover {
    transform: scale(1.05);        /* Slight zoom on hover */
}
	}
</style>