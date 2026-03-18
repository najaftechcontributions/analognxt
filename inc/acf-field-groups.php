<?php
/**
 * ACF Field Groups for Blocks
 *
 * Register all ACF field groups for custom blocks
 *
 * @package AnalogNXT
 */

if (!function_exists('acf_add_local_field_group')) {
	return;
}

/**
 * Hero Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_hero_block',
	'title' => 'Hero Block Settings',
	'fields' => array(
		array(
			'key' => 'field_hero_video_url',
			'label' => 'Background Video URL',
			'name' => 'video_url',
			'type' => 'url',
			'instructions' => 'Enter the Bunny CDN video URL or upload video',
			'default_value' => 'https://vz-bf52cb50-0a5.b-cdn.net/ce1749fb-077d-416a-8df8-bc32ac669c3c/playlist.m3u8',
		),
		array(
			'key' => 'field_hero_poster_image',
			'label' => 'Poster Image',
			'name' => 'poster_image',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_hero_title',
			'label' => 'Hero Title',
			'name' => 'hero_title',
			'type' => 'text',
			'default_value' => 'Evolving Dynamic Digital Spectacles',
		),
		array(
			'key' => 'field_hero_featured_project',
			'label' => 'Featured Project',
			'name' => 'featured_project',
			'type' => 'post_object',
			'post_type' => array('post', 'project'),
			'return_format' => 'object',
		),
		array(
			'key' => 'field_hero_featured_label',
			'label' => 'Featured Label',
			'name' => 'featured_label',
			'type' => 'text',
			'default_value' => 'New Project',
		),
		array(
			'key' => 'field_hero_social_links',
			'label' => 'Social Links',
			'name' => 'social_links',
			'type' => 'repeater',
			'layout' => 'table',
			'button_label' => 'Add Social Link',
			'sub_fields' => array(
				array(
					'key' => 'field_social_label',
					'label' => 'Label',
					'name' => 'label',
					'type' => 'text',
				),
				array(
					'key' => 'field_social_url',
					'label' => 'URL',
					'name' => 'url',
					'type' => 'url',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/hero',
			),
		),
	),
));
/**
 *New hero Hero Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_newhero_block',
	'title' => 'New Hero Block Settings',
	'fields' => array(

		/* ================= Slide 1 ================= */
		array(
			'key' => 'field_newhero_slide1_heading',
			'label' => 'Slide 1 Heading',
			'name' => 'slide1_heading',
			'type' => 'wysiwyg',
			'instructions' => 'Heading shown on the first slide (particles only).',
			'default_value' => 'Scroll down',
			'wrapper' => array('width' => '50'),
		),
		array(
			'key' => 'field_newhero_slide1_text',
			'label' => 'Slide 1 Text',
			'name' => 'slide1_text',
			'type' => 'wysiwyg',
			'instructions' => 'Text shown below the Slide 1 heading.',
			'rows' => 3,
			'wrapper' => array('width' => '50'),
		),
		array(
			'key' => 'field_newhero_slide1_image',
			'label' => 'Slide 1 Image',
			'name' => 'slide1_image',
			'type' => 'image',
			'instructions' => 'Image displayed near the heading (not full background).',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'wrapper' => array('width' => '50'),
		),

		/* ================= Slide 2 ================= */
		/* ================= Slide 2 ================= */

		array(
			'key' => 'field_newhero_slide2_heading',
			'label' => 'Slide 2 Heading',
			'name' => 'slide2_heading',
			'type' => 'wysiwyg',
			'instructions' => 'Heading shown on the second slide.',
			'default_value' => 'Animated with GSAP',
			'wrapper' => array('width' => '50'),
		),

		array(
			'key' => 'field_newhero_slide2_text',
			'label' => 'Slide 2 Text',
			'name' => 'slide2_text',
			'type' => 'wysiwyg',
			'instructions' => 'Text shown below the Slide 2 heading.',
			'rows' => 3,
			'wrapper' => array('width' => '50'),
		),

		array(
			'key' => 'field_newhero_slide2_bg_image',
			'label' => 'Slide 2 Background Image',
			'name' => 'slide2_bg_image',
			'type' => 'image',
			'instructions' => 'Full background image for the entire Slide 2 section.',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),

		/* ================= Particles ================= */
		array(
			'key' => 'field_newhero_particles_count',
			'label' => 'Particles Count',
			'name' => 'particles_count',
			'type' => 'number',
			'instructions' => 'How many particles to render per slide (performance sensitive).',
			'default_value' => 300,
			'min' => 50,
			'max' => 1200,
			'step' => 10,
			'wrapper' => array('width' => '33'),
		),

		array(
			'key' => 'field_newhero_particles_speed',
			'label' => 'Particles Speed',
			'name' => 'particles_speed',
			'type' => 'number',
			'instructions' => 'Particle movement speed.',
			'default_value' => 0.3,
			'min' => 0,
			'max' => 5,
			'step' => 0.1,
			'wrapper' => array('width' => '33'),
		),

		array(
			'key' => 'field_newhero_particles_color',
			'label' => 'Particles Color',
			'name' => 'particles_color',
			'type' => 'color_picker',
			'instructions' => 'Particle color (default white).',
			'default_value' => '#ffffff',
			'wrapper' => array('width' => '33'),
		),

	),

	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/newhero',
			),
		),
	),
));
/* Accrodian section */
acf_add_local_field_group(array(
	'key'   => 'group_fx_accordion_block',
	'title' => 'FX Accordion Block Settings',
	'fields' => array(

		// Optional block title shown above accordion
		array(
			'key'   => 'field_fx_acc_title',
			'label' => 'Title',
			'name'  => 'title',
			'type'  => 'text',
		),

		// Optional intro text under the title
		array(
			'key'   => 'field_fx_acc_intro',
			'label' => 'Intro Text',
			'name'  => 'intro',
			'type'  => 'textarea',
			'rows'  => 3,
		),

		// Accordion items
		array(
			'key'          => 'field_fx_acc_items',
			'label'        => 'Accordion Items',
			'name'         => 'items',
			'type'         => 'repeater',
			'layout'       => 'block',
			'button_label' => 'Add Item',
			'min'          => 1,
			'sub_fields'   => array(

				// Pill label e.g. "Step 01" (optional)
				array(
					'key'   => 'field_fx_acc_item_step',
					'label' => 'Step Label',
					'name'  => 'step_label',
					'type'  => 'text',
				),

				// Main summary heading (required)
				array(
					'key'      => 'field_fx_acc_item_heading',
					'label'    => 'Heading',
					'name'     => 'heading',
					'type'     => 'text',
					'required' => 1,
				),

				// Small line under heading in summary (optional)
				array(
					'key'   => 'field_fx_acc_item_kicker',
					'label' => 'Kicker / Subheading',
					'name'  => 'kicker',
					'type'  => 'text',
				),

				// Expanded content
				array(
					'key'          => 'field_fx_acc_item_content',
					'label'        => 'Content',
					'name'         => 'content',
					'type'         => 'wysiwyg',
					'media_upload' => 0,
				),

				// Optional list title (matches .fx-sub)
				array(
					'key'   => 'field_fx_acc_item_list_title',
					'label' => 'List Title',
					'name'  => 'list_title',
					'type'  => 'text',
				),

				// Optional bullet list
				array(
					'key'          => 'field_fx_acc_item_list',
					'label'        => 'Bullet List',
					'name'         => 'bullet_list',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add Bullet',
					'min'          => 0,
					'sub_fields'   => array(
						array(
							'key'      => 'field_fx_acc_item_list_text',
							'label'    => 'Bullet',
							'name'     => 'text',
							'type'     => 'text',
							'required' => 1,
						),
					),
				),

				// Optional closing line (matches .fx-closer)
				array(
					'key'   => 'field_fx_acc_item_closer',
					'label' => 'Closing Line',
					'name'  => 'closer',
					'type'  => 'text',
				),

				// Open by default toggle
				array(
					'key'           => 'field_fx_acc_item_open',
					'label'         => 'Open by Default',
					'name'          => 'open_by_default',
					'type'          => 'true_false',
					'ui'            => 1,
					'default_value' => 0,
				),
			),
		),

		// Optional behavior setting (for later JS if needed)
		array(
			'key'           => 'field_fx_acc_single_open',
			'label'         => 'Allow Only One Open Item',
			'name'          => 'single_open',
			'type'          => 'true_false',
			'ui'            => 1,
			'default_value' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param'    => 'block',
				'operator' => '==',
				'value'    => 'acf/fx-accordion',
			),
		),
	),
));
/**
 * Hero2 Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_hero2_block',
	'title' => 'Hero2 Block Settings',
	'fields' => array(
		array(
			'key' => 'field_hero2_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'wysiwyg',
		),
		array(
			'key' => 'field_hero2_subheading',
			'label' => 'Subheading',
			'name' => 'subheading',
			'type' => 'text',
		),
		array(
			'key' => 'field_hero2_bg_image',
			'label' => 'Background Image',
			'name' => 'bg_image',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/hero2',
			),
		),
	),
));

acf_add_local_field_group(array(
  'key' => 'group_custom_block',
  'title' => 'Custom Block Settings',
  'fields' => array(

    // ✅ Main heading (NOT in repeater, so it won't loop)
    array(
      'key' => 'field_main_heading',
      'label' => 'Main Heading',
      'name' => 'main_heading',
      'type' => 'wysiwyg',
    ),

    // Repeater
    array(
      'key' => 'field_custom_sections',
      'label' => 'Sections',
      'name' => 'sections',
      'type' => 'repeater',
      'button_label' => 'Add Section',
      'sub_fields' => array(
        array(
          'key' => 'field_section_number',
          'label' => 'Number of Explanations',
          'name' => 'number',
          'type' => 'number',
          'default_value' => 1,
        ),
        array(
          'key' => 'field_section_heading',
          'label' => 'Heading',
          'name' => 'heading',
          'type' => 'text',
        ),
        array(
          'key' => 'field_section_text',
          'label' => 'Text',
          'name' => 'text',
          'type' => 'textarea',
        ),
      ),
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'block',
        'operator' => '==',
        'value' => 'acf/project-inner',
      ),
    ),
  ),
));


/**
 * About Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_about_block',
	'title' => 'About Block Settings',
	'fields' => array(
		array(
			'key' => 'field_about_eyebrow',
			'label' => 'Eyebrow Text',
			'name' => 'eyebrow_text',
			'type' => 'text',
			'default_value' => 'About Us',
		),
		array(
			'key' => 'field_about_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'default_value' => 'Art Comes First — Creative Agency',
		),
		array(
			'key' => 'field_about_description',
			'label' => 'Description',
			'name' => 'description',
			'type' => 'wysiwyg',
			'default_value' => '<p>We specialize in transforming spaces into digital masterpieces. Founded in 2013, Zeit has become one of Vietnam\'s leading agencies in creative advertising, event organization, and brand consultancy.</p>',
			'toolbar' => 'basic',
			'media_upload' => 0,
		),
		array(
			'key' => 'field_about_button_text',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'default_value' => 'Learn More',
		),
		array(
			'key' => 'field_about_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'url',
			'default_value' => '/about',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/about',
			),
		),
	),
));

/**
 * Stats Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_stats_block',
	'title' => 'Stats Block Settings',
	'fields' => array(
		array(
			'key' => 'field_stats_items',
			'label' => 'Stats Items',
			'name' => 'stats_items',
			'type' => 'repeater',
			'layout' => 'table',
			'button_label' => 'Add Stat',
			'sub_fields' => array(
				array(
					'key' => 'field_stat_number',
					'label' => 'Number',
					'name' => 'number',
					'type' => 'text',
					'placeholder' => '150+',
				),
				array(
					'key' => 'field_stat_label',
					'label' => 'Label',
					'name' => 'label',
					'type' => 'text',
					'placeholder' => 'Projects Completed',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/stats',
			),
		),
	),
));

/**
 * Featured Clients Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_featured_clients_block',
	'title' => 'Featured Clients Block Settings',
	'fields' => array(
		array(
			'key' => 'field_clients_text',
			'label' => 'Clients Text',
			'name' => 'clients_text',
			'type' => 'textarea',
			'instructions' => 'Enter client names separated by spaces or commas',
			'default_value' => 'NESTLÉ VINAMILK MEAD JOHNSON NUTIFOOD P&G UNILEVER SANOFI ABBOTT LAVIE NHÀ NƯỚC THỜI BÁO KINH TẾ VIỆT NAM BỘ CÔNG AN...',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/featured-clients',
			),
		),
	),
));
/**
 * Contact + Map Block Fields
 * Form + Map are hardcoded in template.
 */
acf_add_local_field_group(array(
	'key' => 'group_contact_map_block',
	'title' => 'Contact + Map Block Settings',
	'fields' => array(
		array(
			'key' => 'field_contact_overline',
			'label' => 'Overline',
			'name' => 'overline',
			'type' => 'text',
			'default_value' => "Let's Chat",
		),
		array(
			'key' => 'field_contact_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'default_value' => 'Send a Message',
		),
		array(
			'key' => 'field_contact_button_text',
			'label' => 'Submit Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'instructions' => 'Optional. If set, the block will force the Fluent Form submit button label to this text.',
			'default_value' => "Let's Talk",
		),

		array(
			'key' => 'field_contact_tab_info',
			'label' => 'Info Bar',
			'name' => '',
			'type' => 'tab',
			'placement' => 'top',
		),

		array(
			'key' => 'field_contact_whatsapp_label',
			'label' => 'WhatsApp Label',
			'name' => 'whatsapp_label',
			'type' => 'text',
			'default_value' => 'Whatsapp',
		),
		array(
			'key' => 'field_contact_whatsapp_value',
			'label' => 'WhatsApp Value',
			'name' => 'whatsapp_value',
			'type' => 'text',
			'default_value' => '+971 55 145 4572',
		),

		array(
			'key' => 'field_contact_address_label',
			'label' => 'Address Label',
			'name' => 'address_label',
			'type' => 'text',
			'default_value' => 'Address',
		),
		array(
			'key' => 'field_contact_address_value',
			'label' => 'Address Value',
			'name' => 'address_value',
			'type' => 'textarea',
			'rows' => 2,
			'new_lines' => 'br',
			'default_value' => 'DUBAI, UNITED ARAB EMIRATES',
		),

		array(
			'key' => 'field_contact_email_label',
			'label' => 'Email Label',
			'name' => 'email_label',
			'type' => 'text',
			'default_value' => 'Email',
		),
		array(
			'key' => 'field_contact_email_value',
			'label' => 'Email Value',
			'name' => 'email_value',
			'type' => 'email',
			'default_value' => 'info@analogmxt.com',
		),

		array(
			'key' => 'field_contact_tab_advanced',
			'label' => 'Advanced',
			'name' => '',
			'type' => 'tab',
			'placement' => 'top',
		),
		array(
			'key' => 'field_contact_section_id',
			'label' => 'Section ID (Optional)',
			'name' => 'section_id',
			'type' => 'text',
			'instructions' => 'Optional anchor id (e.g. contact).',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/contact-map',
			),
		),
	),
));

/**
 * Marquee Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_marquee_block',
	'title' => 'Marquee Block Settings',
	'fields' => array(
		array(
			'key' => 'field_marquee_items',
			'label' => 'Marquee Items',
			'name' => 'marquee_items',
			'type' => 'repeater',
			'layout' => 'table',
			'button_label' => 'Add Item',
			'sub_fields' => array(
				array(
					'key' => 'field_marquee_type',
					'label' => 'Type',
					'name' => 'type',
					'type' => 'select',
					'choices' => array(
						'text' => 'Text',
						'image' => 'Image',
					),
					'default_value' => 'text',
				),
				array(
					'key' => 'field_marquee_text',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'text',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_marquee_type',
								'operator' => '==',
								'value' => 'text',
							),
						),
					),
				),
				array(
					'key' => 'field_marquee_image',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'array',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_marquee_type',
								'operator' => '==',
								'value' => 'image',
							),
						),
					),
				),
			),
		),
		array(
			'key' => 'field_marquee_video',
			'label' => 'Scaling Video',
			'name' => 'scaling_video',
			'type' => 'file',
			'return_format' => 'array',
			'mime_types' => 'mp4,webm',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/marquee',
			),
		),
	),
));

/*Marquee extended */
acf_add_local_field_group(array(
	'key' => 'group_marqueeex_block',
	'title' => 'Marquee Block Settings',
	'fields' => array(

		// Heading
		array(
			'key' => 'field_marquee_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
		),

		// Sub Heading
		array(
			'key' => 'field_marquee_subheading',
			'label' => 'Sub Heading',
			'name' => 'subheading',
			'type' => 'text',
		),
		array(
			'key' => 'field_marquee_text2',
			'label' => 'Text2',
			'name' => 'text-below-marquee',
			'type' => 'wysiwyg'
		),

		// Background Image
		array(
			'key' => 'field_marquee_bg_image',
			'label' => 'Background Image',
			'name' => 'background_image',
			'type' => 'image',
			'return_format' => 'array',
		),

		// Marquee Items
		array(
			'key' => 'field_marquee_items',
			'label' => 'Marquee Items',
			'name' => 'marquee_items',
			'type' => 'repeater',
			'layout' => 'table',
			'button_label' => 'Add Item',
			'sub_fields' => array(
				array(
					'key' => 'field_marquee_type',
					'label' => 'Type',
					'name' => 'type',
					'type' => 'select',
					'choices' => array(
						'text' => 'Text',
						'image' => 'Image',
					),
					'default_value' => 'text',
				),
				array(
					'key' => 'field_marquee_text',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'text',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_marquee_type',
								'operator' => '==',
								'value' => 'text',
							),
						),
					),
				),
				array(
					'key' => 'field_marquee_image',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'array',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_marquee_type',
								'operator' => '==',
								'value' => 'image',
							),
						),
					),
				),
			),
		),

		// Scaling Video
		array(
			'key' => 'field_marquee_video',
			'label' => 'Scaling Video',
			'name' => 'scaling_video',
			'type' => 'file',
			'return_format' => 'array',
			'mime_types' => 'mp4,webm',
		),
	),

	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/marqueeex',
			),
		),
	),
));

/* Our Mission Block Fields */
acf_add_local_field_group(array(
	'key' => 'group_our_mission_block',
	'title' => 'Our Mission Block Settings',
	'fields' => array(

		// Heading
		array(
			'key' => 'field_our_mission_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
		),

		// Sub Heading
		array(
			'key' => 'field_our_mission_subheading',
			'label' => 'Sub Heading',
			'name' => 'subheading',
			'type' => 'text',
		),

		// WYSIWYG Text
		array(
			'key' => 'field_our_mission_text',
			'label' => 'Text',
			'name' => 'text',
			'type' => 'wysiwyg',
		),

	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/our-mission', // block name, no .php here
			),
		),
	),
));
/* Portfolio Block Fields */
acf_add_local_field_group(array(
	'key' => 'group_portfolio_block',
	'title' => 'Portfolio Block Settings',
	'fields' => array(

		// Heading
		array(
			'key' => 'field_portfolio_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'wysiwyg',
		),

		// Image 1
		array(
			'key' => 'field_portfolio_image_1',
			'label' => 'Image 1',
			'name' => 'image_1',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),

		// Image 2
		array(
			'key' => 'field_portfolio_image_2',
			'label' => 'Image 2',
			'name' => 'image_2',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),

		// Image 3
		array(
			'key' => 'field_portfolio_image_3',
			'label' => 'Image 3',
			'name' => 'image_3',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),

		// Image 4
		array(
			'key' => 'field_portfolio_image_4',
			'label' => 'Image 4',
			'name' => 'image_4',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),

	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/portfolio', // matches portfolio.php
			),
		),
	),
));
/* Map Section Fields */
acf_add_local_field_group(array(
	'key' => 'group_map_section',
	'title' => 'Map Section Settings',
	'fields' => array(

		// Heading
		array(
			'key' => 'field_map_section_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'default_value' => 'Our Location',
			'placeholder' => 'Enter section heading',
		),

		// Button Text
		array(
			'key' => 'field_map_section_button_text',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'placeholder' => 'Enter button text',
		),

		// Button Link
		array(
			'key' => 'field_map_section_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'url',
			'placeholder' => 'Enter button URL',
		),

	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/mapsec', // matches mapsec.php block
			),
		),
	),
));


/**
 * Scaling CTA Block Fields (Updated for Image)
 */
acf_add_local_field_group(array(
	'key' => 'group_scaling_cta_block',
	'title' => 'Scaling CTA Block Settings',
	'fields' => array(
		array(
			'key' => 'field_scaling_cta_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'default_value' => 'EVERY PIXEL, EVERY LINE,',
		),
		array(
			'key' => 'field_scaling_cta_subheading',
			'label' => 'Subheading',
			'name' => 'subheading',
			'type' => 'text',
			'default_value' => 'EVERY DETAIL CRAFTED WITH PRECISION AND ACCURACY',
		),
		array(
			'key' => 'field_scaling_cta_image',
			'label' => 'Background Image',
			'name' => 'scaling_image',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/scaling-cta',
			),
		),
	),
));

/**
 * Services Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_services_block',
	'title' => 'Services Block Settings',
	'fields' => array(
		array(
			'key' => 'field_eyebrow_text',
			'label' => 'Button Text',
			'name' => 'eyebrow_text',
			'type' => 'text',
			'default_value' => '', // leave empty by default
			'placeholder' => 'Enter button text',
		),
		array(
			'key' => 'field_services_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'default_value' => 'We create, produce, and design experiences that make brands hit different.',
		),
		array(
			'key' => 'field_services_button_text',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'default_value' => '[ All Services ]',
		),
		array(
			'key' => 'field_services_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'url',
			'default_value' => '/services',
		),
		array(
			'key' => 'field_services_items',
			'label' => 'Services',
			'name' => 'services_items',
			'type' => 'repeater',
			'layout' => 'block',
			'button_label' => 'Add Service',
			'sub_fields' => array(
				array(
					'key' => 'field_service_number',
					'label' => 'Number',
					'name' => 'number',
					'type' => 'text',
					'placeholder' => '01',
				),
				array(
					'key' => 'field_service_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'wysiwyg',
				),
				array(
					'key' => 'field_service_items',
					'label' => 'Service Items',
					'name' => 'items',
					'type' => 'textarea',
					'instructions' => 'Enter each item on a new line',
				),
				array(
					'key' => 'field_service_image',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'array',
					'preview_size' => 'medium',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/services',
			),
		),
	),
));

/**
 * Works Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_works_block',
	'title' => 'Works Block Settings',
	'fields' => array(
		array(
			'key' => 'field_works_eyebrow',
			'label' => 'Eyebrow Text',
			'name' => 'eyebrow_text',
			'type' => 'text',
			'default_value' => 'Our Works',
		),
		array(
			'key' => 'field_works_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'default_value' => 'Selected Cases',
		),
		array(
			'key' => 'field_works_button_text',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'default_value' => '[ All Projects ]',
		),
		array(
			'key' => 'field_works_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'url',
			'default_value' => '/works',
		),
		array(
			'key' => 'field_works_items',
			'label' => 'Portfolio Items',
			'name' => 'works_items',
			'type' => 'repeater',
			'layout' => 'block',
			'button_label' => 'Add Work',
			'sub_fields' => array(
				array(
					'key' => 'field_work_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
				),
				array(
					'key' => 'field_work_client',
					'label' => 'Client',
					'name' => 'client',
					'type' => 'text',
				),
				array(
					'key' => 'field_work_year',
					'label' => 'Year',
					'name' => 'year',
					'type' => 'text',
					'placeholder' => '2025',
				),
				array(
					'key' => 'field_work_category',
					'label' => 'Category',
					'name' => 'category',
					'type' => 'text',
					'placeholder' => 'Events, Production, etc.',
				),
				array(
					'key' => 'field_work_link',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
				),
				array(
					'key' => 'field_work_image',
					'label' => 'Featured Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'array',
					'preview_size' => 'medium',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/works',
			),
		),
	),
));
/**
 * Works Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_works_block',
	'title' => 'Works Block Settings',
	'fields' => array(
		array(
			'key' => 'field_works_eyebrow',
			'label' => 'Eyebrow Text',
			'name' => 'eyebrow_text',
			'type' => 'text',
			'default_value' => 'Our Works',
		),
		array(
			'key' => 'field_works_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'default_value' => 'Selected Cases',
		),
		array(
			'key' => 'field_works_button_text',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'default_value' => '[ All Projects ]',
		),
		array(
			'key' => 'field_works_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'url',
			'default_value' => '/works',
		),
		array(
			'key' => 'field_works_items',
			'label' => 'Portfolio Items',
			'name' => 'works_items',
			'type' => 'repeater',
			'layout' => 'block',
			'button_label' => 'Add Work',
			'sub_fields' => array(
				array(
					'key' => 'field_work_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
				),
				array(
					'key' => 'field_work_client',
					'label' => 'Client',
					'name' => 'client',
					'type' => 'text',
				),
				array(
					'key' => 'field_work_year',
					'label' => 'Year',
					'name' => 'year',
					'type' => 'text',
					'placeholder' => '2025',
				),
				array(
					'key' => 'field_work_category',
					'label' => 'Category',
					'name' => 'category',
					'type' => 'text',
					'placeholder' => 'Events, Production, etc.',
				),
				array(
					'key' => 'field_work_link',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
				),
				array(
					'key' => 'field_work_image',
					'label' => 'Featured Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'array',
					'preview_size' => 'medium',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/works',
			),
		),
	),
));
/* Blog grid block */
acf_add_local_field_group(array(
	'key' => 'group_works_block',
	'title' => 'Works Block Settings',
	'fields' => array(
		array(
			'key' => 'field_works_eyebrow',
			'label' => 'Eyebrow Text',
			'name' => 'eyebrow_text',
			'type' => 'text',
			'default_value' => 'Our Works',
		),
		array(
			'key' => 'field_works_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'default_value' => 'Selected Cases',
		),
		array(
			'key' => 'field_works_button_text',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'default_value' => '[ All Projects ]',
		),
		array(
			'key' => 'field_works_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'url',
			'default_value' => '/works',
		),
		array(
			'key' => 'field_works_items',
			'label' => 'Portfolio Items',
			'name' => 'works_items',
			'type' => 'repeater',
			'layout' => 'block',
			'button_label' => 'Add Work',
			'sub_fields' => array(
				array(
					'key' => 'field_work_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
				),
				array(
					'key' => 'field_work_client',
					'label' => 'Client',
					'name' => 'client',
					'type' => 'text',
				),
				array(
					'key' => 'field_work_year',
					'label' => 'Year',
					'name' => 'year',
					'type' => 'text',
					'placeholder' => '2025',
				),
				array(
					'key' => 'field_work_category',
					'label' => 'Category',
					'name' => 'category',
					'type' => 'text',
					'placeholder' => 'Events, Production, etc.',
				),
				array(
					'key' => 'field_work_link',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
				),
				array(
					'key' => 'field_work_image',
					'label' => 'Featured Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'array',
					'preview_size' => 'medium',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/works',
			),
		),
	),
));

/**
 * Final CTA Block Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_final_cta_block',
	'title' => 'Final CTA Block Settings',
	'fields' => array(
		array(
			'key' => 'field_final_cta_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'wysiwyg',
			'default_value' => 'Have a project in mind?',
		),
		array(
			'key' => 'field_final_cta_video',
			'label' => '3D Animation Video',
			'name' => 'video',
			'type' => 'file',
			'return_format' => 'array',
			'mime_types' => 'mp4,webm',
		),
		array(
			'key' => 'field_final_cta_button_text',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'default_value' => 'Get In Touch',
		),
		array(
			'key' => 'field_final_cta_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'url',
			'default_value' => '/contact',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/final-cta',
			),
		),
	),
));

/**
 * Project Section Fields
 */
acf_add_local_field_group(array(
	'key' => 'group_project_section',
	'title' => 'Project Section Settings',
	'fields' => array(
		array(
			'key' => 'field_project_items',
			'label' => 'Projects',
			'name' => 'projects',
			'type' => 'repeater',
			'button_label' => 'Add Project',
			'sub_fields' => array(
				array(
					'key' => 'field_project_name',
					'label' => 'Project Name',
					'name' => 'project_name',
					'type' => 'text',
					'required' => 1,
				),
				array(
					'key' => 'field_project_hover_image',
					'label' => 'Hover Image',
					'name' => 'hover_image',
					'type' => 'image',
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
				),
				array(
					'key' => 'field_project_link',
					'label' => 'Project Link',
					'name' => 'project_link',
					'type' => 'url',
				),
				array(
					'key' => 'field_project_country',
					'label' => 'Project Country',
					'name' => 'project_country',
					'type' => 'text',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/project-section',
			),
		),
	),
));
acf_add_local_field_group(array(
	'key' => 'group_about_company',
	'title' => 'About Company Settings',
	'fields' => array(
		array(
			'key' => 'field_about_heading',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'required' => 1,
		),
		array(
			'key' => 'field_about_paragraph',
			'label' => 'Paragraph',
			'name' => 'paragraph',
			'type' => 'wysiwyg',
			'tabs' => 'all',       // 'visual', 'text', or 'all'
			'toolbar' => 'full',    // 'full' or 'basic'
			'media_upload' => 1,    // allow media upload
		),

		array(
			'key' => 'field_about_image_left',
			'label' => 'Image Left',
			'name' => 'image_left',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),
		array(
			'key' => 'field_about_image_right',
			'label' => 'Image Right',
			'name' => 'image_right',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),
		array(
			'key' => 'field_about_image_bottom',
			'label' => 'Image Bottom',
			'name' => 'image_bottom',
			'type' => 'image',
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/about-company',
			),
		),
	),
));

