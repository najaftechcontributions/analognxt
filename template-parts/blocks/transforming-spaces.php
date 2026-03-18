<?php
/**
 * Transforming Spaces Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$heading = get_field( 'heading' ) ?: 'Transforming spaces into digital masterpieces';

// Split heading into words for animation
$words = explode( ' ', $heading );
?>

<section class="transforming-section u-section u-zindex-3">
    <div class="u-section-spacer"></div>
    
    <div class="transforming-contain u-container">
        <div class="transforming-heading-wrap">
            <h2 class="transforming-heading u-text-style-h1">
                <?php echo esc_html( $heading ); ?>
            </h2>
        </div>
    </div>
    
    <div class="u-section-spacer"></div>
</section>
