<?php
/**
 * Map Section Block Template
 *
 * @package YourTheme
 */

// Get ACF fields
$heading = get_field('heading'); // from your field group
$map_iframe = get_field('map_iframe'); // optional iframe URL field if you add it
?>

<section class="map-section u-container">
    <?php if ($heading): ?>
        <h2 class="map-section-heading"><?php echo esc_html($heading); ?></h2>
    <?php endif; ?>

    <?php if ($map_iframe): ?>
        <div class="map-wrapper">
            <?php 
                // output iframe safely
                echo $map_iframe; 
            ?>
        </div>
    <?php else: ?>
        <!-- fallback static map iframe -->
        <div class="map-wrapper">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086...etc" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    <?php endif; ?>
</section>

<style>
.map-section {
    padding: 50px 0;
    text-align: center;
}

.map-section-heading {
    font-size: 2rem;
    margin-bottom: 30px;
}

.map-wrapper iframe {
    width: 100%;
    height: 400px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}
</style>
