<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-barba="wrapper" data-scrolling-started="false" data-scrolling-direction="up" data-scrolling-top="true">

<?php get_header( 'home' ); ?>

<div class="cursor">
<p class="cursor-paragraph">[About]</p>
</div>

<!-- <div class="loader_wrap">
<div data-lottie-frame="36" data-lottie="" data-lottie-src="https://Zeit.b-cdn.net/Z_LoadingPage_alpha.json" class="loader_lottie"></div>
</div> -->

<div data-barba-namespace="home" data-barba="container" class="page_wrap">
<?php
// Include the main homepage content
get_template_part( 'template-parts/homepage', 'content' );
?>
</div>


</body>
</html>
