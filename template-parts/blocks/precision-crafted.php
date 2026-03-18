<?php
/**
 * Precision Crafted Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$heading = get_field( 'heading' ) ?: 'EVERY PIXEL, EVERY LINE, EVERY DETAIL CRAFTED WITH PRECISION AND ACCURACY';
?>

<section class="precision-section u-section u-zindex-3">
    <div class="u-section-spacer"></div>
    
    <div class="precision-contain u-container">
        <div class="precision-heading-wrap">
            <h2 class="precision-heading u-text-style-h2">
                <?php echo esc_html( $heading ); ?>
            </h2>
        </div>
    </div>
    
    <div class="u-section-spacer"></div>
</section>
