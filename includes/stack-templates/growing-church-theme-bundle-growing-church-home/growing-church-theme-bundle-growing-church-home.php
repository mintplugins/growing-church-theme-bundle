<?php
		/**
	   	 * Add Home to the list of installed stack templates
	   	 *
	   	 * @since    1.0.0
	   	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_growing_church_theme_bundle_growing_church_home
	   	 * @see      function_name()
	   	 * @param    array $installed_templates See link for description.
	   	 * @return   array $installed_templates See link for description.
	   	 */
	   	function mp_stacks_templates_add_growing_church_theme_bundle_growing_church_home( $installed_templates ){

	   		$installed_templates['mp_stacks_growing_church_theme_bundle_growing_church_home_array'] = array(
	   			'template_slug' => 'growing_church_theme_bundle_growing_church_home',
	   			'template_title' => __( 'Home', 'growing_church_theme_bundle' ),
	   			'template_description' => __('The "Home" stack template included in the Growing Church Theme Bundle', 'growing_church_theme_bundle' ),
	   			'template_tags' => 'church',
	   			'template_preview_img' => '',
	   			'template_demo_url' => 'https://demo.mintplugins.com/growing-church-theme-bundle/stack/growing-church-theme-bundle-growing-church-home',
	   		);

	   		return $installed_templates;

	   	}
	   	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_growing_church_theme_bundle_growing_church_home' );

		/**
		 * This function holds and returns the Home Template Array
		 *
		 * @since    1.0.0
		 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
		 * @return   array The Stack Template Aray
		 */
		function mp_stacks_growing_church_theme_bundle_growing_church_home_array(){

			$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Growing Church Theme Bundle\'s "Home" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Homepage Header Brick',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1460680003:3',
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
        'value' => 'header-field-1.jpg',
        'attachment' => true,
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
              'value' => '20',
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
              'value' => '100',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;Welcome to Growing Church&lt;/p&gt;
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
              'value' => '15',
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
              'value' => '20',
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
              'value' => '&lt;p&gt;A growing Faith Community in your town.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '19',
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
              'value' => '19',
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
              'value' => '19',
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
              'value' => '&lt;p&gt;[mp_easy_icon icon=&quot;fa-map-marker&quot; size=&quot;22&quot; color=&quot;&quot; left_space=&quot;&quot; right_space=&quot;5&quot; vertical_offset=&quot;-3&quot;] 123 Church St. in AnyTown&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '17',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '25',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '17',
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
              'value' => '17',
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
              'value' => '200',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;[mp_easy_icon icon=&quot;fa-clock-o&quot; size=&quot;22&quot; color=&quot;&quot; left_space=&quot;&quot; right_space=&quot;5&quot; vertical_offset=&quot;-4&quot;] Service Times: Sundays at 9:00am, 10:30am, and 7:30pm&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          4 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '',
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
              'value' => '&lt;p&gt;[mp_button icon=&quot;fa-home&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Who We Are&quot; link=&quot;#a-little-about-who-we-are&quot; btn_bg=&quot;show&quot; color=&quot;&quot; hover_color=&quot;&quot; text_color=&quot;&quot; hover_text_color=&quot;&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
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
        'value' => '3',
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
        'value' => '78',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => 'mp_stacks_parallax_on',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'Upcoming Events',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1447372373:3',
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
        'value' => 'sermongrid',
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
              'value' => 'all_ctc_event',
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
              'value' => '15',
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
              'value' => '&lt;p&gt;Latest Sermons&lt;/p&gt;
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
        'value' => '3',
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
      'linkgrid_links_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
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
        'value' => '50',
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
        'value' => '3',
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
        'value' => '15',
      ),
      'sermongrid_featured_images_height' => 
      array (
        'value' => '300',
      ),
      'sermongrid_title_background_opacity' => 
      array (
        'value' => '71',
      ),
    ),
    'brick_3' => 
    array (
      'brick_title' => 'A Little About Who We Are',
      'mp_stack_order' => 1020,
      '_edit_lock' => 
      array (
        'value' => '1478644978:3',
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
        'value' => 'video',
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
              'value' => '&lt;p&gt;A little about who we are...&lt;/p&gt;
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
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '20',
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
              'value' => '100',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus sapien non laoreet placerat. Curabitur lobortis ex ut massa placerat feugiat. Sed interdum egestas ante, ut condimentum nisl posuere eget. Suspendisse venenatis, ante vel vestibulum ornare, felis mauris eleifend diam, quis aliquet eros mi et sapien. Pellentesque et mi egestas, commodo quam at, porttitor nunc.&lt;/p&gt;
&lt;p&gt;Sed blandit scelerisque libero, eget sagittis tellus varius sed. Sed consectetur facilisis consequat. Pellentesque convallis fringilla leo, vitae vestibulum tortor vehicula convallis. Maecenas sed vehicula nunc, imperdiet cursus enim. Phasellus non vehicula nisl, ac interdum mi.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
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
              'value' => '&lt;p&gt;[mp_button icon=&quot;fa-user&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Find out more&quot; link=&quot;https://demo.mintplugins.com/growing-church-theme-bundle/who-we-are&quot; btn_bg=&quot;show&quot; color=&quot;&quot; hover_color=&quot;&quot; text_color=&quot;&quot; hover_text_color=&quot;&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '3',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'http://demo.mintplugins.com/growing-church-theme-bundle/wp-content/uploads/sites/10/2015/08/symphony-black1.png',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '8',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#282a29',
      ),
      'brick_display_type' => 
      array (
        'value' => 'tiled',
      ),
      'brick_video_url' => 
      array (
        'value' => 'https://www.youtube.com/watch?v=ZdgZzCIYcDw',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '80',
      ),
    ),
    'brick_4' => 
    array (
      'brick_title' => 'Upcoming Events',
      'mp_stack_order' => 1030,
      '_edit_lock' => 
      array (
        'value' => '1446871095:3',
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
        'value' => 'eventgrid',
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
      'eventgrid_per_page' => 
      array (
        'value' => '3',
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
              'value' => '15',
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
              'value' => '&lt;p&gt;Upcoming Events&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '3',
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
      'brick_bg_color' => 
      array (
        'value' => '#ffffff',
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
    ),
    'brick_5' => 
    array (
      'brick_title' => 'Mailinglist Sign up',
      'mp_stack_order' => 1040,
      '_edit_lock' => 
      array (
        'value' => '1446871299:3',
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
        'value' => 'mailchimp',
      ),
      'mp_stacks_forms_fields' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'field_title' => 
            array (
              'value' => 'Name',
              'attachment' => false,
            ),
            'field_description' => 
            array (
              'value' => 'Enter your name',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'textbox',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => 'Your Name Here',
              'attachment' => false,
            ),
            'field_taxonomy' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_select_values' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_width' => 
            array (
              'value' => '49',
              'attachment' => false,
            ),
            'field_placement' => 
            array (
              'value' => 'inline-block',
              'attachment' => false,
            ),
            'field_meta_key' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'field_title' => 
            array (
              'value' => 'Email',
              'attachment' => false,
            ),
            'field_description' => 
            array (
              'value' => 'Enter your email address',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'email',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => 'Your Email Address Here',
              'attachment' => false,
            ),
            'field_taxonomy' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_select_values' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_width' => 
            array (
              'value' => '49',
              'attachment' => false,
            ),
            'field_placement' => 
            array (
              'value' => 'inline-block',
              'attachment' => false,
            ),
            'field_meta_key' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'field_title' => 
            array (
              'value' => 'Message',
              'attachment' => false,
            ),
            'field_description' => 
            array (
              'value' => 'Enter your message here',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'textarea',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => 'Enter your message or question here...',
              'attachment' => false,
            ),
            'field_taxonomy' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_select_values' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_width' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'field_placement' => 
            array (
              'value' => 'table',
              'attachment' => false,
            ),
            'field_meta_key' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stacks_forms_submission_actions' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'mp_stacks_forms_action' => 
            array (
              'value' => 'email',
              'attachment' => false,
            ),
            'mp_stacks_forms_emails' => 
            array (
              'value' => 'youremailhere@youremailprovider.com',
              'attachment' => false,
            ),
            'email_subject_line' => 
            array (
              'value' => 'Form submitted from http://demo.mintplugins.com/growing-church-theme-bundle',
              'attachment' => false,
            ),
            'wppost_post_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'wppost_post_status' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
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
              'value' => '15',
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
              'value' => '15',
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
              'value' => '&lt;p&gt;Stay up to date!&lt;/p&gt;
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
              'value' => '18',
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
              'value' => '&lt;p&gt;Get all the latest about upcoming events, ways to get involved, and more by joining our weekly email list.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '3',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'http://demo.mintplugins.com/growing-church-theme-bundle/wp-content/uploads/sites/10/2015/08/symphony-black1.png',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => '',
      ),
      'mp_stacks_forms_field_titles_font_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mp_stacks_forms_field_desc_font_color' => 
      array (
        'value' => '#ffffff',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '8',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#282a29',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Roboto',
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '300',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '600',
      ),
      'brick_max_width_c2' => 
      array (
        'value' => '',
      ),
      'brick_display_type' => 
      array (
        'value' => 'tiled',
      ),
      'mp_stacks_parallax_bg_height_percent' => 
      array (
        'value' => '200',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'mailchimp_submit_button_color' => 
      array (
        'value' => '#2ba8e2',
      ),
      'mailchimp_mouseover_submit_button_color' => 
      array (
        'value' => '#009be2',
      ),
      'mailchimp_submit_button_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mailchimp_mouseover_submit_button_text_color' => 
      array (
        'value' => '#ffffff',
      ),
    ),
    'brick_6' => 
    array (
      'brick_title' => 'SocialGrid',
      'mp_stack_order' => 1050,
      '_edit_lock' => 
      array (
        'value' => '1445874719:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'mp_socialgrid_source_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'type' => 
            array (
              'value' => 'instagram',
              'attachment' => false,
            ),
            'feed_type' => 
            array (
              'value' => 'user',
              'attachment' => false,
            ),
            'hashtag' => 
            array (
              'value' => 'hillsongsafrica',
              'attachment' => false,
            ),
            'show_icon' => 
            array (
              'value' => 'mp_socialgrid_source_repeater[0][show_icon]',
              'attachment' => false,
            ),
            'inner_bg_color' => 
            array (
              'value' => '#000000',
              'attachment' => false,
            ),
            'bg_color' => 
            array (
              'value' => '#222222',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => 'mp_socialgrid_source_repeater[0][socialgrid_twitter_exclude_instagram]',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_bg_animation_keyframes' => 
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
              'value' => '#000000',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '3',
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_masonry' => 
      array (
        'value' => 'socialgrid_masonry',
      ),
      'socialgrid_isotope' => 
      array (
        'value' => '',
      ),
      'socialgrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'socialgrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'socialgrid_isotope_nav_btn_bg',
      ),
      'socialgrid_isotope_nav_btn_text' => 
      array (
        'value' => 'socialgrid_isotope_nav_btn_text',
      ),
      'socialgrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'socialgrid_isotope_nav_btn_icons',
      ),
      'socialgrid_featured_images_show' => 
      array (
        'value' => 'socialgrid_featured_images_show',
      ),
      'socialgrid_image_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_image_overlay_animation_keyframes' => 
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
              'value' => '10',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#000',
              'attachment' => false,
            ),
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_text_w_img_show' => 
      array (
        'value' => 'socialgrid_text_w_img_show',
      ),
      'socialgrid_text_w_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_w_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_w_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_text_w_img_background_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_wo_img_show' => 
      array (
        'value' => 'socialgrid_text_wo_img_show',
      ),
      'socialgrid_text_wo_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_wo_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_wo_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_text_wo_img_background_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_w_img_show' => 
      array (
        'value' => 'socialgrid_date_w_img_show',
      ),
      'socialgrid_date_w_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_w_img_italic' => 
      array (
        'value' => 'socialgrid_date_w_img_italic',
      ),
      'socialgrid_date_w_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_date_w_img_background_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_wo_img_show' => 
      array (
        'value' => 'socialgrid_date_wo_img_show',
      ),
      'socialgrid_date_wo_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_wo_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_wo_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_date_wo_img_background_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_w_img_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_w_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_w_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_w_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_author_w_img_background_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_wo_img_show' => 
      array (
        'value' => 'socialgrid_author_wo_img_show',
      ),
      'socialgrid_author_wo_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_wo_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_wo_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_author_wo_img_background_show' => 
      array (
        'value' => '',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'mp_stack_id' => 
      array (
        'value' => '3',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'socialgrid',
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
              'value' => '15',
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
              'value' => '&lt;p&gt;Our Latest Posts&lt;/p&gt;
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
      'socialgrid_text_w_img_color' => 
      array (
        'value' => '#ffffff',
      ),
      'socialgrid_date_w_img_placement' => 
      array (
        'value' => 'over_image_top_left',
      ),
      'socialgrid_date_w_img_color' => 
      array (
        'value' => '#ffffff',
      ),
      'socialgrid_post_inner_margin' => 
      array (
        'value' => '10',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'http://demo.mintplugins.com/growing-church-theme-bundle/wp-content/uploads/sites/10/2015/08/brillant.png',
      ),
      'brick_display_type' => 
      array (
        'value' => 'tiled',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#ffffff',
      ),
      'socialgrid_text_w_img_background_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'socialgrid_text_w_img_background_opacity' => 
      array (
        'value' => '54',
      ),
      'socialgrid_text_w_img_word_limit' => 
      array (
        'value' => '8',
      ),
      'socialgrid_text_w_img_background_padding' => 
      array (
        'value' => '2',
      ),
    ),
  ),
);

            // Set a standard for the descriptions of Stack Templates in Theme Bundles
            $template_array['stack_description'] = __('The "Home" stack template included in the Growing Church Theme Bundle', 'growing_church_theme_bundle' );

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