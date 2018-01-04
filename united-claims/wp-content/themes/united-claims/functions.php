<?php
add_filter('acf/settings/show_admin', '__return_false');
function my_acf_show_admin( $show ) {
    
    return current_user_can('manage_options');
    
}
function uc_scripts() {
	wp_register_script('owl-js', get_stylesheet_directory_uri() . '/framework/js/owl.carousel.js', array( 'jquery' ), NULL, true);
	wp_register_script('uc_main-js', get_stylesheet_directory_uri() . '/framework/js/main.js', array( 'jquery' ), NULL, true);

	wp_enqueue_script('owl-js');
	wp_enqueue_script('uc_main-js');
}
add_action( 'wp_enqueue_scripts', 'uc_scripts' );

// Removing p ag from the excerpt
remove_filter( 'the_excerpt', 'wpautop' );

// Adding a Field Label Visibility dropdown under the Appearance tab in your Gravity Form field
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


// Registering CPT claims
function claim_post_type() {
	$labels = array(
		'name'                  => _x( 'Claims', 'Claims', 'unitedclaims' ),
		'singular_name'         => _x( 'Claim', 'Claim', 'unitedclaims' ),
		'menu_name'             => __( 'Claims', 'unitedclaims' ),
		'name_admin_bar'        => __( 'Claim', 'unitedclaims' ),
		'archives'              => __( 'Claim Archives', 'unitedclaims' ),
		'parent_item_colon'     => __( 'Parent Claim:', 'unitedclaims' ),
		'all_items'             => __( 'All Claims', 'unitedclaims' ),
		'add_new_item'          => __( 'Add New', 'unitedclaims' ),
		'add_new'               => __( 'Add New Claim', 'unitedclaims' ),
		'new_item'              => __( 'New Claim', 'unitedclaims' ),
		'edit_item'             => __( 'Edit Claim', 'unitedclaims' ),
		'update_item'           => __( 'Update Claim', 'unitedclaims' ),
		'view_item'             => __( 'View Claim', 'unitedclaims' ),
		'search_items'          => __( 'Search Claim', 'unitedclaims' ),
		'not_found'             => __( 'Not found', 'unitedclaims' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'unitedclaims' ),
		'featured_image'        => __( 'Featured Image', 'unitedclaims' ),
		'set_featured_image'    => __( 'Set featured image', 'unitedclaims' ),
		'remove_featured_image' => __( 'Remove featured image', 'unitedclaims' ),
		'use_featured_image'    => __( 'Use as featured image', 'unitedclaims' ),
		'insert_into_item'      => __( 'Insert into item', 'unitedclaims' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'unitedclaims' ),
		'items_list'            => __( 'Claims list', 'unitedclaims' ),
		'items_list_navigation' => __( 'Claims list navigation', 'unitedclaims' ),
		'filter_items_list'     => __( 'Filter claims list', 'unitedclaims' ),
	);
	$args = array(
		'label'                 => __( 'Claim', 'unitedclaims' ),
		'description'           => __( 'Claim information page.', 'unitedclaims' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'excerpt', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-text',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'claims', $args );
}
add_action( 'init', 'claim_post_type', 0 );

// END Registering CPT Claims


// Adding custom field on Claims CPT
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
	'key' => 'group_58009ab8bbdb9',
	'title' => 'Claims Options',
	'fields' => array (
		array (
			'key' => 'field_58009ac40910a',
			'label' => 'Show claim on HomePage?',
			'name' => 'show_claim_homepage',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'claims',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
endif;
// END Adding custom field on Claims CPT

// Registering CPT Testimonials
function testimonials_post_type() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Testimonials', 'unitedclaims' ),
		'singular_name'         => _x( 'Testimonial', 'Testimonial', 'unitedclaims' ),
		'menu_name'             => __( 'Testimonials', 'unitedclaims' ),
		'name_admin_bar'        => __( 'Testimonial', 'unitedclaims' ),
		'archives'              => __( 'Testimonial Archives', 'unitedclaims' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'unitedclaims' ),
		'all_items'             => __( 'All Testimonials', 'unitedclaims' ),
		'add_new_item'          => __( 'Add New', 'unitedclaims' ),
		'add_new'               => __( 'Add New Testimonial', 'unitedclaims' ),
		'new_item'              => __( 'New Testimonial', 'unitedclaims' ),
		'edit_item'             => __( 'Edit Testimonial', 'unitedclaims' ),
		'update_item'           => __( 'Update Testimonial', 'unitedclaims' ),
		'view_item'             => __( 'View Testimonial', 'unitedclaims' ),
		'search_items'          => __( 'Search Testimonial', 'unitedclaims' ),
		'not_found'             => __( 'Not found', 'unitedclaims' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'unitedclaims' ),
		'featured_image'        => __( 'Featured Image', 'unitedclaims' ),
		'set_featured_image'    => __( 'Set featured image', 'unitedclaims' ),
		'remove_featured_image' => __( 'Remove featured image', 'unitedclaims' ),
		'use_featured_image'    => __( 'Use as featured image', 'unitedclaims' ),
		'insert_into_item'      => __( 'Insert into item', 'unitedclaims' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'unitedclaims' ),
		'items_list'            => __( 'Testimonials list', 'unitedclaims' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'unitedclaims' ),
		'filter_items_list'     => __( 'Filter Testimonials list', 'unitedclaims' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'unitedclaims' ),
		'description'           => __( 'Testimonial information page.', 'unitedclaims' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonials_post_type', 0 );
// END Registering CPT Testimonials


// Adding custom field on Testimonials CPT

if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
	'key' => 'group_58076f4cb3b37',
	'title' => 'Testimonial Options',
	'fields' => array (
		array (
			'key' => 'field_58076f7ff0e5d',
			'label' => 'City',
			'name' => 'testimonial_city',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_58076fadf0e5e',
			'label' => 'Date',
			'name' => 'testimonial_date',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'testimonials',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
endif;
// END Adding custom field on Testimonials CPT


// Registering CPT F.A.Q
function faq_post_type() {
	$labels = array(
		'name'                  => _x( 'F.A.Q', 'F.A.Q', 'unitedclaims' ),
		'singular_name'         => _x( 'F.A.Q', 'F.A.Q', 'unitedclaims' ),
		'menu_name'             => __( 'F.A.Q', 'unitedclaims' ),
		'name_admin_bar'        => __( 'F.A.Q', 'unitedclaims' ),
		'archives'              => __( 'F.A.Q Archives', 'unitedclaims' ),
		'parent_item_colon'     => __( 'Parent F.A.Q:', 'unitedclaims' ),
		'all_items'             => __( 'All F.A.Q', 'unitedclaims' ),
		'add_new_item'          => __( 'Add New', 'unitedclaims' ),
		'add_new'               => __( 'Add New F.A.Q', 'unitedclaims' ),
		'new_item'              => __( 'New F.A.Q', 'unitedclaims' ),
		'edit_item'             => __( 'Edit F.A.Q', 'unitedclaims' ),
		'update_item'           => __( 'Update F.A.Q', 'unitedclaims' ),
		'view_item'             => __( 'View F.A.Q', 'unitedclaims' ),
		'search_items'          => __( 'Search F.A.Q', 'unitedclaims' ),
		'not_found'             => __( 'Not found', 'unitedclaims' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'unitedclaims' ),
		'featured_image'        => __( 'Featured Image', 'unitedclaims' ),
		'set_featured_image'    => __( 'Set featured image', 'unitedclaims' ),
		'remove_featured_image' => __( 'Remove featured image', 'unitedclaims' ),
		'use_featured_image'    => __( 'Use as featured image', 'unitedclaims' ),
		'insert_into_item'      => __( 'Insert into item', 'unitedclaims' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'unitedclaims' ),
		'items_list'            => __( 'F.A.Q list', 'unitedclaims' ),
		'items_list_navigation' => __( 'F.A.Q list navigation', 'unitedclaims' ),
		'filter_items_list'     => __( 'Filter F.A.Q list', 'unitedclaims' ),
	);
	$args = array(
		'label'                 => __( 'F.A.Q', 'unitedclaims' ),
		'description'           => __( 'F.A.Q information page.', 'unitedclaims' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'author', 'revisions',  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-chat',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'faq', $args );
}
add_action( 'init', 'faq_post_type', 0 );
// END Registering CPT F.A.Q

// Adding custom field on FAQ CPT
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
	'key' => 'group_580773ced93dd',
	'title' => 'FAQ Options',
	'fields' => array (
		array (
			'key' => 'field_580773f299b68',
			'label' => 'Question',
			'name' => 'faq_question',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_58077453941e6',
			'label' => 'Answers',
			'name' => 'faq_answers',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'faq',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
endif;
// END Adding custom field on FAQ CPT

// Adding custom fields on Homepage page
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
	'key' => 'group_5808d8698f944',
	'title' => 'Homepage Quick Links',
	'fields' => array (
		array (
			'key' => 'field_5808d899b0682',
			'label' => 'Quick Links Content',
			'name' => 'homepage_quick_links_content',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_5808d93ab0684',
					'label' => 'Title',
					'name' => 'quicklink_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5808d95ab0685',
					'label' => 'Content',
					'name' => 'quicklink_content',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array (
					'key' => 'field_5808d984b0686',
					'label' => 'Link',
					'name' => 'quicklink_link',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
						0 => 'page',
						1 => 'post',
						2 => 'claims',
						3 => 'faq',
						4 => 'testimonials',
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'allow_archives' => 1,
					'multiple' => 0,
				),
				array (
					'key' => 'field_5808d9bfb0687',
					'label' => 'Link name',
					'name' => 'quick_link_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
endif;

// Options for the slider on the Homepage
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5972031a449b8',
	'title' => 'Homepage Slider',
	'fields' => array (
		array (
			'key' => 'field_597207966f6a5',
			'label' => 'Slider',
			'name' => 'hslider',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 1,
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Slider',
			'sub_fields' => array (
				array (
					'key' => 'field_597207656f6a4',
					'label' => 'Image',
					'name' => 'hslider_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_5972069f6f6a0',
					'label' => 'Text',
					'name' => 'hslider_text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 0,
				),
				array (
					'key' => 'field_597206d36f6a1',
					'label' => 'Button text',
					'name' => 'hslider_button_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_597207066f6a2',
					'label' => 'Button link',
					'name' => 'hslider_button_link',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_597207296f6a3',
					'label' => 'Small text',
					'name' => 'hslider_small_text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'find-print',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'text',
					'toolbar' => 'basic',
					'media_upload' => 0,
				),
				array (
					'key' => 'field_599d956fb34b2',
					'label' => 'Tracking code',
					'name' => 'hslider_tracking_code',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '2',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
// END Adding custom fields on Homepage page
