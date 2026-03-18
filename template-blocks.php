<?php
/**
 * Template Name: Blocks Template
 * Template Post Type: page
 *
 * A page template that uses Gutenberg blocks for building custom pages.
 * This template is ideal for building custom landing pages with ACF blocks.
 *
 * @package AnalogNXT
 */

get_header();
?>

<div class="cursor">
	<p class="cursor-paragraph">[About]</p>
</div>

<div data-barba-namespace="blocks-page" data-barba="container" class="page_wrap">
	<main id="main" class="page_main">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php
					the_content();
					?>
				</div>
			</article>
		<?php endwhile; ?>
	</main>
</div>

<?php
get_footer();
