<?php
/**
 * Template Name: Blocks Page
 * Template Post Type: page
 *
 * A blocks-based page template with all necessary styles, scripts, header, and footer.
 * Use this template to build pages using the custom ACF blocks.
 *
 * @package AnalogNXT
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<style>
		.u-section-spacer {
		height: 50px !important;
	 }
</style>
</head>

<body <?php body_class(); ?> data-barba="wrapper" data-scrolling-started="false" data-scrolling-direction="up" data-scrolling-top="true">

<?php get_header( 'home' ); ?>

<div class="cursor">
	<p class="cursor-paragraph">[About]</p>
</div>
<!-- 
<div class="loader_wrap">
	<div data-lottie-frame="36" data-lottie="" data-lottie-src="https://Zeit.b-cdn.net/Z_LoadingPage_alpha.json" class="loader_lottie"></div>
</div> -->

<div data-barba-namespace="home" data-barba="container" class="page_wrap">
	<!-- Fixed Position Styles -->
	<div class="u-position-fixed">
		<style>
			html.lenis {
				height: auto;
			}

			.lenis.lenis-smooth {
				scroll-behavior: auto;
			}

			.lenis.lenis-smooth [data-lenis-prevent] {
				overscroll-behavior: contain;
			}

			.lenis.lenis-stopped {
				overflow: hidden;
			}

			body ::-webkit-scrollbar {
				display: none;
			}

			body {
				-ms-overflow-style: none;
			}

			html {
				scrollbar-width: none;
			}

			/* .loader_wrap {
				display: flex;
			} */

			.contact_image_wrap {
				width: 0%;
			}
		</style>
	</div>

	<!-- Global Styles Embed -->
	<div class="u-position-fixed">
		<div class="w-embed">
			<?php get_template_part( 'template-parts/inline-styles' ); ?>
		</div>
	</div>

	<!-- Grid Guide -->
	<div class="guide_wrap">
		<div class="w-embed">
			<style>
				html.wf-design-mode .guide_wrap {
					display: block;
				}

				.guide_layout {
					counter-reset: gridguides;
				}

				.guide_layout>div::before {
					counter-increment: gridguides;
					content: counter(gridguides);
				}
			</style>
		</div>
		<div class="guide_contain u-container">
			<div class="guide_layout">
				<?php for ( $i = 0; $i < 24; $i++ ) : ?>
					<div class="guide_column"></div>
				<?php endfor; ?>
			</div>
		</div>
	</div>

	<main id="main" class="page_main">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php
					/**
					 * The page content will display Gutenberg blocks.
					 * Add the following blocks in the Gutenberg editor:
					 * 
					 * 1. Hero Section
					 * 2. About Section
					 * 3. Stats Section
					 * 4. Featured Clients
					 * 5. Marquee Section
					 * 6. Scaling CTA
					 * 7. Services Section
					 * 8. Works/Portfolio
					 * 9. Final CTA
					 */
					the_content();
					?>
				</div>
			</article>
		<?php endwhile; ?>
	</main>

	<!-- Footer -->
	<?php get_template_part( 'template-parts/footer', 'content' ); ?>
</div>

<?php
get_footer( 'home' );
?>

<?php wp_footer(); ?>
</body>
</html>
