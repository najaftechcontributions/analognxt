<?php 
// Get top-level fields
$heading    = get_field('heading');
$subheading = get_field('subheading');
$text       = get_field('text');
?>
<div class="u-section-spacer"></div>
<section class="u-container u-section">
    <div class="inner-ourmission w-flex u-flex-column u-align-items-end u-gap-5 u-align-start-m">
<div class="heading-wrap w-flex u-flex-row w-align-items-center u-gap-3">
        <?php if($heading): ?>
            <h2 class="global-h2 main-sub"><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>

        <?php if($subheading): ?>
            <div class="global-h1"><?php echo esc_html($subheading); ?></div>
        <?php endif; ?>
        </div>

        <?php if($text): ?>
            <div class="global-txt1 main-txt">
                <?php echo $text; // WYSIWYG allows HTML ?>
            </div>
        <?php endif; ?>

    </div>
</section>
<div class="u-section-spacer"></div>
<style>
    .main-txt{
        width: 100%;
        max-width: 610px;
    }
    .main-sub{
        font-size: 44px;
        color: #F29740;
    }
</style>