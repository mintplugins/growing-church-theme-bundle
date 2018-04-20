<?php
		/**
	   	 * Add Events to the list of installed stack templates
	   	 *
	   	 * @since    1.0.0
	   	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_growing_church_theme_bundle_growing_church_events
	   	 * @see      function_name()
	   	 * @param    array $installed_templates See link for description.
	   	 * @return   array $installed_templates See link for description.
	   	 */
	   	function mp_stacks_templates_add_growing_church_theme_bundle_growing_church_events( $installed_templates ){

	   		$installed_templates['mp_stacks_growing_church_theme_bundle_growing_church_events_array'] = array(
	   			'template_slug' => 'growing_church_theme_bundle_growing_church_events',
	   			'template_title' => __( 'Events', 'growing_church_theme_bundle' ),
	   			'template_description' => __('The "Events" stack template included in the Growing Church Theme Bundle', 'growing_church_theme_bundle' ),
	   			'template_tags' => 'church',
	   			'template_preview_img' => '',
	   			'template_demo_url' => 'https://demo.mintplugins.com/growing-church-theme-bundle/stack/growing-church-theme-bundle-growing-church-events',
	   		);

	   		return $installed_templates;

	   	}
	   	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_growing_church_theme_bundle_growing_church_events' );

		/**
		 * This function holds and returns the Events Template Array
		 *
		 * @since    1.0.0
		 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
		 * @return   array The Stack Template Aray
		 */
		function mp_stacks_growing_church_theme_bundle_growing_church_events_array(){

			$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Growing Church Theme Bundle\'s "Events" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Events Header Brick',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1447181267:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'none',
      ),
      'eventgrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'taxonomy_bg_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_masonry' => 
      array (
        'value' => 'eventgrid_masonry',
      ),
      'eventgrid_isotope' => 
      array (
        'value' => '',
      ),
      'eventgrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'eventgrid_isotope_orderby_options' => 
      array (
        'value' => '""',
      ),
      'eventgrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_bg',
      ),
      'eventgrid_isotope_nav_btn_text' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_text',
      ),
      'eventgrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_icons',
      ),
      'eventgrid_featured_images_show' => 
      array (
        'value' => 'eventgrid_featured_images_show',
      ),
      'eventgrid_image_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_image_overlay_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#FFF',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_title_show' => 
      array (
        'value' => 'eventgrid_title_show',
      ),
      'eventgrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'eventgrid_date_show' => 
      array (
        'value' => 'eventgrid_date_show',
      ),
      'eventgrid_date_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_date_background_show' => 
      array (
        'value' => 'eventgrid_date_background_show',
      ),
      'eventgrid_excerpt_show' => 
      array (
        'value' => 'eventgrid_excerpt_show',
      ),
      'eventgrid_excerpt_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'taxonomy_bg_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_masonry' => 
      array (
        'value' => 'sermongrid_masonry',
      ),
      'sermongrid_isotope' => 
      array (
        'value' => '',
      ),
      'sermongrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'sermongrid_isotope_orderby_options' => 
      array (
        'value' => '""',
      ),
      'sermongrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_bg',
      ),
      'sermongrid_isotope_nav_btn_text' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_text',
      ),
      'sermongrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_icons',
      ),
      'sermongrid_featured_images_show' => 
      array (
        'value' => 'sermongrid_featured_images_show',
      ),
      'sermongrid_image_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_image_overlay_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#FFF',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_title_show' => 
      array (
        'value' => 'sermongrid_title_show',
      ),
      'sermongrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_date_show' => 
      array (
        'value' => 'sermongrid_date_show',
      ),
      'sermongrid_date_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_date_background_show' => 
      array (
        'value' => 'sermongrid_date_background_show',
      ),
      'sermongrid_excerpt_show' => 
      array (
        'value' => 'sermongrid_excerpt_show',
      ),
      'sermongrid_excerpt_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '175',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'http://demo.mintplugins.com/growing-church-theme-bundle/wp-content/uploads/sites/10/2015/11/header-field-1.jpg',
      ),
      'brick_display_type' => 
      array (
        'value' => 'fill',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Roboto',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '400',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;Events&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Roboto',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '300',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;View all of the upcoming events&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stacks_text_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_line_1_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_1_font_size' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_line_1_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_1_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_1_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_line_1' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_2_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_2_font_size' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_line_2_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_2_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_2_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_line_2' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '21',
      ),
      'brick_bg_video_source' => 
      array (
        'value' => '',
      ),
      'brick_bg_video' => 
      array (
        'value' => 'https://www.youtube.com/watch?v=O4rTumTrV1c',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_bg_video_color_overlay' => 
      array (
        'value' => '',
      ),
      'brick_bg_video_color_opacity' => 
      array (
        'value' => '0',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Roboto',
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '',
      ),
      'brick_min_below' => 
      array (
        'value' => '120',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#282a29',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '77',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => 'mp_stacks_parallax_on',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'Staff Person 1',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1446780287:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'eventgrid',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'none',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'eventgrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => 'all_mp_event',
              'attachment' => false,
            ),
            'taxonomy_bg_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_masonry' => 
      array (
        'value' => 'eventgrid_masonry',
      ),
      'eventgrid_isotope' => 
      array (
        'value' => 'eventgrid_isotope',
      ),
      'eventgrid_isotope_filter_groups' => 
      array (
        'value' => '["mp_calendars"]',
      ),
      'eventgrid_isotope_orderby_options' => 
      array (
        'value' => '""',
      ),
      'eventgrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_bg',
      ),
      'eventgrid_isotope_nav_btn_text' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_text',
      ),
      'eventgrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_icons',
      ),
      'eventgrid_featured_images_show' => 
      array (
        'value' => 'eventgrid_featured_images_show',
      ),
      'eventgrid_image_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_image_overlay_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#FFF',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_title_show' => 
      array (
        'value' => 'eventgrid_title_show',
      ),
      'eventgrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'eventgrid_date_show' => 
      array (
        'value' => 'eventgrid_date_show',
      ),
      'eventgrid_date_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_date_background_show' => 
      array (
        'value' => 'eventgrid_date_background_show',
      ),
      'eventgrid_excerpt_show' => 
      array (
        'value' => 'eventgrid_excerpt_show',
      ),
      'eventgrid_excerpt_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => 'all',
              'attachment' => false,
            ),
            'taxonomy_bg_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_masonry' => 
      array (
        'value' => 'sermongrid_masonry',
      ),
      'sermongrid_isotope' => 
      array (
        'value' => 'sermongrid_isotope',
      ),
      'sermongrid_isotope_filter_groups' => 
      array (
        'value' => '["ctc_sermon_topic","ctc_sermon_book","ctc_sermon_series","ctc_sermon_speaker"]',
      ),
      'sermongrid_isotope_orderby_options' => 
      array (
        'value' => '""',
      ),
      'sermongrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_bg',
      ),
      'sermongrid_isotope_nav_btn_text' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_text',
      ),
      'sermongrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_icons',
      ),
      'sermongrid_featured_images_show' => 
      array (
        'value' => 'sermongrid_featured_images_show',
      ),
      'sermongrid_image_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_image_overlay_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#2ba8e2',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'animation_length' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '68',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#2ba8e2',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_title_show' => 
      array (
        'value' => 'sermongrid_title_show',
      ),
      'sermongrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_title_background_show' => 
      array (
        'value' => 'sermongrid_title_background_show',
      ),
      'sermongrid_date_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_date_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_date_background_show' => 
      array (
        'value' => 'sermongrid_date_background_show',
      ),
      'sermongrid_excerpt_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_excerpt_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#282a29',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;Lead Pastor&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#282a29',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '5',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Roboto',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '300',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;Jake Peralta&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#282a29',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Roboto',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '300',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;A short description of this person goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis arcu velit, gravida vitae risus non, laoreet eleifend enim. Integer eget magna commodo, lacinia lectus quis, cursus metus. Cras pulvinar lorem sed semper mollis. Vivamus egestas imperdiet molestie. Suspendisse ultricies pretium orci sed laoreet. Aliquam tempus at magna nec maximus. Nulla posuere libero vel magna lobortis ultricies.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stacks_text_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_line_1_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_1_font_size' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_line_1_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_1_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_1_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_line_1' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_2_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_2_font_size' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_line_2_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_2_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_line_2_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_line_2' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '21',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'http://demo.mintplugins.com/growing-church-theme-bundle/wp-content/uploads/sites/10/2015/08/brillant.png',
      ),
      'brick_display_type' => 
      array (
        'value' => 'tiled',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '100',
      ),
      'linkgrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_masonry' => 
      array (
        'value' => 'linkgrid_masonry',
      ),
      'linkgrid_link_images_show' => 
      array (
        'value' => 'linkgrid_link_images_show',
      ),
      'linkgrid_image_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_image_overlay_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#76bfe2',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'animation_length' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '80',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#76bfe2',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_title_show' => 
      array (
        'value' => 'linkgrid_title_show',
      ),
      'linkgrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'linkgrid_description_show' => 
      array (
        'value' => 'linkgrid_description_show',
      ),
      'linkgrid_description_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_description_background_show' => 
      array (
        'value' => '',
      ),
      'linkgrid_title_placement' => 
      array (
        'value' => 'over_image_bottom_left',
      ),
      'linkgrid_title_color' => 
      array (
        'value' => '#ffffff',
      ),
      'linkgrid_description_placement' => 
      array (
        'value' => 'over_image_bottom_left',
      ),
      'linkgrid_description_color' => 
      array (
        'value' => '#ffffff',
      ),
      'brick_max_width' => 
      array (
        'value' => '1000',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '50',
      ),
      'brick_min_below' => 
      array (
        'value' => '',
      ),
      'brick_min_above_c1' => 
      array (
        'value' => '',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '',
      ),
      'brick_min_above_c2' => 
      array (
        'value' => '',
      ),
      'brick_min_below_c2' => 
      array (
        'value' => '',
      ),
      'brick_min_height' => 
      array (
        'value' => '50',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '',
      ),
      'brick_float_c1' => 
      array (
        'value' => '',
      ),
      'brick_max_width_c2' => 
      array (
        'value' => '',
      ),
      'brick_float_c2' => 
      array (
        'value' => '',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '35',
      ),
      'brick_class_name' => 
      array (
        'value' => '',
      ),
      'brick_bg_video_source' => 
      array (
        'value' => '',
      ),
      'brick_bg_video' => 
      array (
        'value' => '',
      ),
      'brick_bg_video_custom_url' => 
      array (
        'value' => '',
      ),
      'brick_bg_video_color_overlay' => 
      array (
        'value' => '',
      ),
      'brick_bg_video_color_opacity' => 
      array (
        'value' => '50',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#ffffff',
      ),
      'brick_bg_color_opacity' => 
      array (
        'value' => '100',
      ),
      'linkgrid_per_row' => 
      array (
        'value' => '4',
      ),
      'linkgrid_per_page' => 
      array (
        'value' => '8',
      ),
      'linkgrid_description_size' => 
      array (
        'value' => '13',
      ),
      'sermongrid_per_page' => 
      array (
        'value' => '12',
      ),
      'sermongrid_title_placement' => 
      array (
        'value' => 'over_image_bottom_left',
      ),
      'sermongrid_title_color' => 
      array (
        'value' => '#000000',
      ),
      'sermongrid_title_size' => 
      array (
        'value' => '17',
      ),
      'sermongrid_featured_images_height' => 
      array (
        'value' => '300',
      ),
      'sermongrid_title_background_opacity' => 
      array (
        'value' => '71',
      ),
      'brick_main_image' => 
      array (
        'value' => '',
      ),
      'brick_main_image_corner_radius' => 
      array (
        'value' => '100',
      ),
      'brick_main_image_stroke_size' => 
      array (
        'value' => '4',
      ),
      'brick_main_image_stroke_color' => 
      array (
        'value' => '#e8e8e8',
      ),
      'brick_main_image_max_width' => 
      array (
        'value' => '',
      ),
      'sermongrid_isotope_navigation' => 
      array (
        'value' => 'dropdown',
      ),
      'sermongrid_isotope_filter_by_textsize' => 
      array (
        'value' => '18',
      ),
      'sermongrid_title_lineheight' => 
      array (
        'value' => '35',
      ),
      'sermongrid_isotope_nav_btn_bg_color' => 
      array (
        'value' => '#3a3a3a',
      ),
      'sermongrid_isotope_nav_btn_text_size' => 
      array (
        'value' => '12',
      ),
      'sermongrid_isotope_nav_btn_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'sermongrid_isotope_filtering_behavior' => 
      array (
        'value' => 'reload_from_scratch',
      ),
      'eventgrid_isotope_filtering_behavior' => 
      array (
        'value' => 'reload_from_scratch',
      ),
      'eventgrid_isotope_navigation' => 
      array (
        'value' => 'buttons',
      ),
      'eventgrid_isotope_nav_btn_bg_color' => 
      array (
        'value' => '#3a3a3a',
      ),
      'eventgrid_isotope_nav_btn_text_size' => 
      array (
        'value' => '14',
      ),
      'eventgrid_isotope_nav_btn_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'eventgrid_isotope_nav_btn_icons_size' => 
      array (
        'value' => '12',
      ),
    ),
  ),
);

            // Set a standard for the descriptions of Stack Templates in Theme Bundles
            $template_array['stack_description'] = __('The "Events" stack template included in the Growing Church Theme Bundle', 'growing_church_theme_bundle' );

			//Loop through each brick
			foreach( $template_array['stack_bricks'] as $brick_name => $brick_options ){

				//Loop through each meta option
				foreach( $brick_options as $meta_key => $meta_option ){

					//If this isn't the title or the order
					if ( $meta_key != 'brick_title' && $meta_key != 'mp_stack_order' ){

						//If this is a repeater
						if ( isset( $meta_option['value'] ) && is_array( $meta_option['value'] ) ){

							$fixed_repeaters = array();

							$repeat_counter = 0;

							//Loop thorugh each repeater
							foreach( $meta_option['value'] as $repeaters ){

								//Loop through each field in this repeater
								foreach( $repeaters as $field_key_id => $repeater_meta_option ){

									//If this is an attachment, set the url to be local to this plugin
									if ( isset( $repeater_meta_option['attachment'] ) && $repeater_meta_option['attachment'] ){

										//Check if this field contains any HTML img tags
										if ( strpos( $repeater_meta_option['value'], '&lt;p&gt;&lt;img' ) !== false ){

											//Get the URL in each img tag's "src" attribute
											$value_explode_results = explode( 'src=&quot;', $repeater_meta_option['value'] );

											$rebuilt_field_value = NULL;

											//Loop through each exploded string
											if ( is_array( $value_explode_results ) ){
												foreach( $value_explode_results as $value_explode_result ){

													//Get the image url
													$temp_explode_holder = explode( '&quot', $value_explode_result );
													$img_url = $temp_explode_holder[0];

													$repeater_meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'attachments/' . $img_url, dirname( dirname( __FILE__ ) ) ), $repeater_meta_option['value'] );

												}
											}

											$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = $repeater_meta_option['value'];
										}
										else{

											$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = plugins_url( 'attachments/' . $repeater_meta_option['value'], dirname( dirname( __FILE__ ) ) );
										}

									}
								}

								$repeat_counter = $repeat_counter + 1;

							}
						}

						//If this is not a repeater
						else{

							//If this is an attachment, set the url to be local to this plugin
							if ( isset( $meta_option['attachment'] ) && $meta_option['attachment'] ){

								//Check if this field contains any HTML img tags
								if ( strpos( $meta_option['value'], '&lt;p&gt;&lt;img' ) !== false ){

									//Get the URL in each img tag's "src" attribute
									$value_explode_results = explode( 'src=&quot;', $meta_option['value'] );

									$rebuilt_field_value = NULL;

									//Loop through each exploded string
									if ( is_array( $value_explode_results ) ){
										foreach( $value_explode_results as $value_explode_result ){

											//Get the image url
											$temp_explode_holder = explode( '&quot', $value_explode_result );
											$img_url = $temp_explode_holder[0];

											$meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'attachments/' . $img_url, dirname( dirname( __FILE__ ) ) ), $meta_option['value'] );

										}
									}

									$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = $meta_option['value'];
								}
								else{

									$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = plugins_url( 'attachments/' . $meta_option['value'], dirname( dirname( __FILE__ ) ) );
								}
							}

						}
					}

				}

			}

			return $template_array;

		}