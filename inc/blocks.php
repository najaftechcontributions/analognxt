<?php
/**
 * ACF Blocks Registration
 *
 * Register all custom Gutenberg blocks using ACF
 *
 * @package AnalogNXT
 */

/**
 * Register ACF Blocks
 */
function analognxt_register_acf_blocks()
{
	// Check if function exists (ACF is active)
	if (!function_exists('acf_register_block_type')) {
		return;
	}

	// Hero Block
	acf_register_block_type(array(
		'name' => 'hero',
		'title' => __('Hero Section', 'analognxt'),
		'description' => __('A custom hero block with video background and featured project', 'analognxt'),
		'render_template' => 'template-parts/blocks/hero.php',
		'category' => 'analognxt-blocks',
		'icon' => 'cover-image',
		'keywords' => array('hero', 'banner', 'video'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	// Hero2 Block
	acf_register_block_type(array(
		'name' => 'hero2',
		'title' => __('Hero 2 Section', 'analognxt'),
		'description' => __('Custom Hero2 block with heading and subheading', 'analognxt'),
		'render_template' => get_template_directory() . '/template-parts/blocks/hero2.php',
		'category' => 'analognxt-blocks',
		'icon' => 'cover-image',
		'keywords' => array('hero2', 'heading', 'subheading'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	// FX Accordion Block
acf_register_block_type(array(
	'name' => 'fx-accordion',
	'title' => __('FX Accordion', 'analognxt'),
	'description' => __('Custom accordion block with repeatable items.', 'analognxt'),
	'render_template' => get_template_directory() . '/template-parts/blocks/fx-accordion.php',
	'category' => 'analognxt-blocks',
	'icon' => 'menu',
	'keywords' => array('accordion', 'faq', 'toggle', 'fx'),
	'mode' => 'edit',
	'supports' => array(
		'align' => false,
		'mode' => true,
		'jsx' => true,
	),
));


	// About Block
	acf_register_block_type(array(
		'name' => 'about',
		'title' => __('About Section', 'analognxt'),
		'description' => __('About section with heading and description', 'analognxt'),
		'render_template' => 'template-parts/blocks/about.php',
		'category' => 'analognxt-blocks',
		'icon' => 'admin-users',
		'keywords' => array('about', 'intro'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));

	// Stats Block
	acf_register_block_type(array(
		'name' => 'stats',
		'title' => __('Stats Section', 'analognxt'),
		'description' => __('Display company statistics', 'analognxt'),
		'render_template' => 'template-parts/blocks/stats.php',
		'category' => 'analognxt-blocks',
		'icon' => 'chart-bar',
		'keywords' => array('stats', 'numbers', 'statistics'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));

	// Featured Clients Block
	acf_register_block_type(array(
		'name' => 'featured-clients',
		'title' => __('Featured Clients', 'analognxt'),
		'description' => __('Showcase client logos and names', 'analognxt'),
		'render_template' => 'template-parts/blocks/featured-clients.php',
		'category' => 'analognxt-blocks',
		'icon' => 'groups',
		'keywords' => array('clients', 'logos', 'partners'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	// Portfolio Block
	acf_register_block_type(array(
		'name' => 'portfolio',
		'title' => __('Portfolio', 'analognxt'),
		'description' => __('Display portfolio images with heading', 'analognxt'),
		'render_template' => 'template-parts/blocks/portfolio.php',
		'category' => 'analognxt-blocks',
		'icon' => 'format-gallery',
		'keywords' => array('portfolio', 'gallery', 'work'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	// Map Section Block
	acf_register_block_type(array(
		'name' => 'mapsec',
		'title' => __('Map Section', 'analognxt'),
		'description' => __('Display a map with a heading', 'analognxt'),
		'render_template' => 'template-parts/blocks/mapsec.php',
		'category' => 'analognxt-blocks',
		'icon' => 'location-alt',
		'keywords' => array('map', 'location', 'google map'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	/* Project Inner page block */

	acf_register_block_type(array(
		'name' => 'project-inner', // block name
		'title' => __('Project Inner', 'analognxt'),
		'description' => __('Display multiple sections with number, heading, and text', 'analognxt'),
		'render_template' => 'template-parts/blocks/project-inner.php',
		'category' => 'analognxt-blocks',
		'icon' => 'editor-table',
		'keywords' => array('sections', 'challenge', 'solution', 'results', 'conclusion'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	/* New hero Block */
	acf_register_block_type(array(
		'name' => 'newhero',
		'title' => __('New Hero (2 Slides)', 'analognxt'),
		'description' => __('Two-slide hero with particles + GSAP section animation', 'analognxt'),
		'render_template' => 'template-parts/blocks/newhero.php',
		'category' => 'analognxt-blocks',
		'icon' => 'slides',
		'keywords' => array('hero', 'slides', 'gsap', 'particles'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));


	// Marquee Block
	acf_register_block_type(array(
		'name' => 'marquee',
		'title' => __('Marquee Section', 'analognxt'),
		'description' => __('Animated marquee with text and images', 'analognxt'),
		'render_template' => 'template-parts/blocks/marquee.php',
		'category' => 'analognxt-blocks',
		'icon' => 'slides',
		'keywords' => array('marquee', 'ticker', 'animation'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));


	// Marquee Block
	acf_register_block_type(array(
		'name' => 'marqueeex',
		'title' => __('Marquee Section extended', 'analognxt'),
		'description' => __('Animated marquee with text and images', 'analognxt'),
		'render_template' => 'template-parts/blocks/marqueeex.php',
		'category' => 'analognxt-blocks',
		'icon' => 'slides',
		'keywords' => array('marqueeex', 'ticker', 'animation'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	// Our Mission Block
	acf_register_block_type(array(
		'name' => 'our-mission',
		'title' => __('Our Mission', 'analognxt'),
		'description' => __('Block with heading, subheading and text', 'analognxt'),
		'render_template' => 'template-parts/blocks/our-mission.php',
		'category' => 'analognxt-blocks',
		'icon' => 'star-filled',
		'keywords' => array('mission', 'heading', 'text'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));


	// Scaling CTA Block
	acf_register_block_type(array(
		'name' => 'scaling-cta',
		'title' => __('Scaling CTA', 'analognxt'),
		'description' => __('Large text CTA with scaling animation', 'analognxt'),
		'render_template' => 'template-parts/blocks/scaling-cta.php',
		'category' => 'analognxt-blocks',
		'icon' => 'megaphone',
		'keywords' => array('cta', 'call to action', 'scaling'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	// Contact + Map Block
	acf_register_block_type(array(
		'name' => 'contact-map',
		'title' => __('Contact + Map', 'analognxt'),
		'description' => __('Contact section with Fluent Form (hardcoded) and map (hardcoded). Text/Info bar via ACF.', 'analognxt'),
		'render_template' => 'template-parts/blocks/contact-map.php',
		'category' => 'analognxt-blocks',
		'icon' => 'email',
		'keywords' => array('contact', 'map', 'form', 'fluent', 'location'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));

	// Services Block
	acf_register_block_type(array(
		'name' => 'services',
		'title' => __('Services Section', 'analognxt'),
		'description' => __('Showcase services with sticky card effect', 'analognxt'),
		'render_template' => 'template-parts/blocks/services.php',
		'category' => 'analognxt-blocks',
		'icon' => 'portfolio',
		'keywords' => array('services', 'what we do'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));

	// Works/Portfolio Block
	acf_register_block_type(array(
		'name' => 'works',
		'title' => __('Works/Portfolio', 'analognxt'),
		'description' => __('Display selected portfolio/case studies', 'analognxt'),
		'render_template' => 'template-parts/blocks/works.php',
		'category' => 'analognxt-blocks',
		'icon' => 'images-alt2',
		'keywords' => array('works', 'portfolio', 'projects'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	// Project Section Block
	acf_register_block_type(array(
		'name' => 'project-section',
		'title' => __('Project Section', 'analognxt'),
		'description' => __('Display multiple projects with name, hover image, and link.', 'analognxt'),
		'render_template' => get_template_directory() . '/template-parts/blocks/project-cta.php',
		'category' => 'analognxt-blocks',
		'icon' => 'images-alt2',
		'keywords' => array('project', 'portfolio', 'hover'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
	// Final CTA Block
	acf_register_block_type(array(
		'name' => 'final-cta',
		'title' => __('Final CTA', 'analognxt'),
		'description' => __('Final call-to-action with 3D animation', 'analognxt'),
		'render_template' => 'template-parts/blocks/final-cta.php',
		'category' => 'analognxt-blocks',
		'icon' => 'format-video',
		'keywords' => array('cta', 'contact', 'final'),
		'mode' => 'edit',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'jsx' => true,
		),
	));
}


add_action('acf/init', 'analognxt_register_acf_blocks');

/**
 * Add custom block category
 */
function analognxt_block_categories($categories)
{
	return array_merge(
		array(
			array(
				'slug' => 'analognxt-blocks',
				'title' => __('AnalogNXT Blocks', 'analognxt'),
				'icon' => 'screenoptions',
			),
		),
		$categories
	);
}
add_filter('block_categories_all', 'analognxt_block_categories', 10, 1);
// About Company Block
acf_register_block_type(array(
	'name' => 'about-company',
	'title' => __('About Company', 'analognxt'),
	'description' => __('About company section with heading, text, and multiple images', 'analognxt'),
	'render_template' => 'template-parts/blocks/aboutcompany.php',
	'category' => 'analognxt-blocks',
	'icon' => 'welcome-learn-more',
	'keywords' => array('about', 'company', 'info'),
	'mode' => 'edit',
	'supports' => array(
		'align' => false,
		'mode' => true,
		'jsx' => true,
	),
));
