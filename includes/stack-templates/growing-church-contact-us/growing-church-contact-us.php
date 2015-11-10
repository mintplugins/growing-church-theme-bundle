<?php 
/**
 * MP Stacks Template Contact Us
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Contact Us
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2015, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

 /**
 * If required add-ons aren't active, stop and install it now
 */
if (!function_exists('mp_stacks_eventgrid_textdomain') || !function_exists('mp_stacks_forms_textdomain') || !function_exists('mp_stacks_googlefonts_textdomain') || !function_exists('mp_stacks_googlemaps_textdomain') || !function_exists('mp_stacks_icons_textdomain') || !function_exists('mp_stacks_image_style_textdomain') || !function_exists('mp_stacks_linkgrid_textdomain') || !function_exists('mp_stacks_mailchimp_textdomain') || !function_exists('mp_stacks_parallax_textdomain') || !function_exists('mp_stacks_sermongrid_textdomain') || !function_exists('mp_stacks_socialgrid_textdomain') || !function_exists('mp_stacks_sociallinks_textdomain') || !function_exists('mp_stacks_widgets_textdomain')){
					
	/**
	 * Check if mp_stacks_eventgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-eventgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_forms is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-forms-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_googlefonts is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-googlefonts-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_googlemaps is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-googlemaps-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_icons is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-icons-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_image_style is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-image-style-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_linkgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-linkgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_mailchimp is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-mailchimp-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_parallax is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-parallax-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_sermongrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-sermongrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_socialgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-socialgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_sociallinks is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-sociallinks-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_widgets is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-widgets-check.php' ); 
		
		
}
/**
 * Otherwise, if all required plugins are active, carry out the plugin's functions
 */
else{

	 /**
	 * Add Contact Us to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_growing_church_contact_us
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_growing_church_contact_us( $installed_templates ){ 
		
		$installed_templates['mp_stacks_growing_church_contact_us_array'] = array(
			'template_slug' => 'growing_church_contact_us',
			'template_title' => __( 'Contact Us', 'growing_church_theme_bundle' ),
			'template_description' => __('Growing Church Theme Bundle\'s "Contact Us" Stack.', 'growing_church_theme_bundle' ),
			'template_tags' => 'Church, Contact',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'http://demo.mintplugins.com/growing-church-theme-bundle/contact/',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_growing_church_contact_us' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_growing_church_contact_us_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_growing_church_contact_us_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['page']['growing_church_contact_us'] = array( 'title' => 'Contact Us','page_template' => 'default','add_to_primary_menu' => 'true', );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'growing_church_theme_bundle_default_stacks', 'mp_stacks_templates_growing_church_contact_us_to_default_stacks' );
	
	/**
	 * This function holds and returns the Contact Us Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_growing_church_contact_us_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Growing Church Theme Bundle\'s "Contact Us" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Contact Header Brick',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1447181302:3',
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
              'value' => '&lt;p&gt;Contact Us&lt;/p&gt;
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
              'value' => '&lt;p&gt;Get in touch with us!&lt;/p&gt;
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
        'value' => '12',
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
      'brick_title' => 'Contact Form',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1446842299:3',
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
        'value' => 'forms',
      ),
      'brick_alignment' => 
      array (
        'value' => 'leftright',
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
              'value' => '20',
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
              'value' => '&lt;p&gt;[mp_easy_icon icon=&quot;fa-envelope-o&quot; size=&quot;&quot; color=&quot;&quot; left_space=&quot;&quot; right_space=&quot;10&quot; align=&quot;bottom&quot;] Email Us&lt;/p&gt;
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
              'value' => '&lt;p&gt;We&#039;d love to hear from you. Fill out the form to send us an email and we will get in touch with you through email shortly. If you&#039;d like to include other ways to get in touch, like through the phone, let us know by leaving that information in your message.&lt;/p&gt;
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
              'value' => '&lt;p&gt;[mp_easy_icon icon=&quot;fa-phone&quot; size=&quot;&quot; color=&quot;&quot; left_space=&quot;&quot; right_space=&quot;10&quot; align=&quot;bottom&quot;] Call Us&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          3 => 
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
              'value' => '&lt;p&gt;1-555-555-5555&lt;/p&gt;
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
        'value' => '12',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'brillant.png',
        'attachment' => true,
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
        'value' => '450',
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
        'value' => '52',
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
              'value' => 'Your name here...',
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
              'value' => 'Enter your email',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'email',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => 'Your email here...',
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
              'value' => 'Enter your message',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'textarea',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => 'Your message here...',
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
      'mp_stacks_forms_recaptcha' => 
      array (
        'value' => 'mp_stacks_forms_recaptcha',
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
              'value' => '',
              'attachment' => false,
            ),
            'email_subject_line' => 
            array (
              'value' => 'Contact Form',
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
      'mp_stacks_forms_recaptcha_site_key' => 
      array (
        'value' => '',
      ),
      'mp_stacks_forms_recaptcha_secret_key' => 
      array (
        'value' => '',
      ),
    ),
  ),
);
		
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
									
									$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = plugins_url( 'images/' . $repeater_meta_option['value'], __FILE__ );
									
								}
							}
							
							$repeat_counter = $repeat_counter + 1;
							
						}
					}
					
					//If this is not a repeater
					else{
						
						//If this is an attachment, set the url to be local to this plugin
						if ( isset( $meta_option['attachment'] ) && $meta_option['attachment'] ){
							$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = plugins_url( 'images/' . $meta_option['value'], __FILE__ );
						}
						
					}
				}
				
			}
			
		}
		
		return $template_array;
		
	}}