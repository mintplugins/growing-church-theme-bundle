<?php 
/**
 * MP Stacks Template Footer
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Footer
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
	 * Add Footer to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_growing_church_footer
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_growing_church_footer( $installed_templates ){ 
		
		$installed_templates['mp_stacks_growing_church_footer_array'] = array(
			'template_slug' => 'growing_church_footer',
			'template_title' => __( 'Footer', 'growing_church_theme_bundle' ),
			'template_description' => __('Growing Church Theme Bundle\'s "Footer" Stack.', 'growing_church_theme_bundle' ),
			'template_tags' => 'Church, Footer',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'http://demo.mintplugins.com/growing-church-theme-bundle/',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_growing_church_footer' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_growing_church_footer_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_growing_church_footer_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['none']['growing_church_footer'] = array( 'title' => 'Footer','is_footer' => true, );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'growing_church_theme_bundle_default_stacks', 'mp_stacks_templates_growing_church_footer_to_default_stacks' );
	
	/**
	 * This function holds and returns the Footer Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_growing_church_footer_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Growing Church Theme Bundle\'s "Footer" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Google Map In Footer',
      'mp_stack_order' => 1000,
      'mp_stack_id' => 
      array (
        'value' => '5',
      ),
      '_edit_lock' => 
      array (
        'value' => '1445538077:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'googlemaps',
      ),
      'mp_stacks_googlemaps_api_key' => 
      array (
        'value' => 'AIzaSyCdjD_XPQiVq91Ch8znD6fX6wemoU1OEXM',
      ),
      'mp_stacks_googlemaps_show_directions' => 
      array (
        'value' => '',
      ),
      'mp_stacks_googlemaps_markers' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'marker_title' => 
            array (
              'value' => 'Growing Church',
              'attachment' => false,
            ),
            'marker_body_text' => 
            array (
              'value' => 'A growing Faith Community in your town.',
              'attachment' => false,
            ),
            'marker_latitude' => 
            array (
              'value' => '34.052234',
              'attachment' => false,
            ),
            'marker_longitude' => 
            array (
              'value' => '-118.243685',
              'attachment' => false,
            ),
            'marker_address' => 
            array (
              'value' => '123 Church Street in Anytown',
              'attachment' => false,
            ),
            'marker_phone_number' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'marker_email' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'marker_image' => 
            array (
              'value' => 'church-map-icon-marker.png',
              'attachment' => true,
            ),
          ),
        ),
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_max_width' => 
      array (
        'value' => '999999',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'mp_stacks_googlemaps_latitude' => 
      array (
        'value' => '34.052234',
      ),
      'mp_stacks_googlemaps_longitude' => 
      array (
        'value' => '-118.243685',
      ),
      'mp_stacks_googlemaps_zoom' => 
      array (
        'value' => '80',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'FOOTER BRICK 1',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1445980755:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'widgets',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'widgets_per_row' => 
      array (
        'value' => '4',
      ),
      'widgets_link_underlines' => 
      array (
        'value' => '',
      ),
      'mp_stacks_widgets_brick_sidebar_id' => 
      array (
        'value' => 'mp_stacks_widgets_sidebar_id_' . time(),
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'mp_stack_id' => 
      array (
        'value' => '5',
      ),
      'widgets_title_color' => 
      array (
        'value' => '#ffffff',
      ),
      'widgets_title_size' => 
      array (
        'value' => '25',
      ),
      'widgets_text_color' => 
      array (
        'value' => '#f7f7f7',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#282a29',
      ),
      'widgets_links_color' => 
      array (
        'value' => '#f7f7f7',
      ),
      'widgets_links_hover_color' => 
      array (
        'value' => '#ffffff',
      ),
    ),
    'brick_3' => 
    array (
      'brick_title' => 'FOOTER Brick 2',
      'mp_stack_order' => 1020,
      '_edit_lock' => 
      array (
        'value' => '1447175374:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
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
              'value' => '&lt;p&gt;&lt;a title=&quot;WordPress Theme Bundle&quot; href=&quot;https://mintplugins.com&quot;&gt;&lt;strong&gt;&copy; Growing Church 2015&lt;/strong&gt;&lt;/a&gt;&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '5',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'sociallinks',
      ),
      'mp_sociallinks_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Facebook',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-square-facebook',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#3b5998',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://facebook.com/mintthemes',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Twitter',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-twitter',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#4099ff',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://twitter.com/mintthemes',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Instagram',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-instagram',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#517fa4',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://instagram.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Google +',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-googleplus',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#dd4b39',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://plus.google.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          4 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Tumblr',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-tumblr',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#32506d',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://tumblr.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          5 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Dribbble',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-dribbble',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#d32357',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://dribbble.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          6 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'GitHub',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-github',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#4183c4',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://github.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          7 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Vimeo',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-vimeo',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#aad450',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://viemo.com/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          8 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'YouTube',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-youtube',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#bb0000',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://youtube.com/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          9 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Linked in',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-linkedin',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#007bb6',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://linkedin.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          10 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Soundcloud',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-soundcloud',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#ff6800',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://soundclouds.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          11 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Pinterest',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-pinterest',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#cb2027',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://pinterest.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          12 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Flickr',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-flickr',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#ff0084',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://flickr.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          13 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Spotify',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-spotify',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#37b239',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://spotify.com/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'gallery_source' => 
      array (
        'value' => '',
      ),
      'gallery_wp_gallery_shortcode' => 
      array (
        'value' => '',
      ),
      'gallery_flickr_photoset_url' => 
      array (
        'value' => '',
      ),
      'gallery_justified_row_height' => 
      array (
        'value' => '',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Oxygen:Light,300',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => '',
      ),
      'mp_stacks_parallax_bg_height' => 
      array (
        'value' => '',
      ),
      'mp_stacks_parallax_speed_settings' => 
      array (
        'value' => '',
      ),
      'mp_stacks_parallax_bg_speed' => 
      array (
        'value' => '30',
      ),
      'mp_stacks_parallax_c1_speed' => 
      array (
        'value' => '1',
      ),
      'mp_stacks_parallax_c2_speed' => 
      array (
        'value' => '1',
      ),
      'mp_stacks_parallax_offset_settings' => 
      array (
        'value' => '',
      ),
      'mp_stacks_parallax_bg_offset' => 
      array (
        'value' => '0',
      ),
      'mp_stacks_parallax_c1_offset' => 
      array (
        'value' => '0',
      ),
      'mp_stacks_parallax_c2_offset' => 
      array (
        'value' => '0',
      ),
      'brick_second_text_media_type_description' => 
      array (
        'value' => '',
      ),
      'brick_second_line_1_color' => 
      array (
        'value' => '',
      ),
      'brick_second_line_1_font_size' => 
      array (
        'value' => '',
      ),
      'brick_second_line_1_google_font' => 
      array (
        'value' => '',
      ),
      'brick_second_text_line_1' => 
      array (
        'value' => '',
      ),
      'brick_second_line_2_color' => 
      array (
        'value' => '',
      ),
      'brick_second_line_2_font_size' => 
      array (
        'value' => '',
      ),
      'brick_second_line_2_google_font' => 
      array (
        'value' => '',
      ),
      'brick_second_text_line_2' => 
      array (
        'value' => '',
      ),
      'brick_second_content_type_help' => 
      array (
        'value' => '',
      ),
      'brick_min_height' => 
      array (
        'value' => '',
      ),
      'brick_max_width' => 
      array (
        'value' => '',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '25',
      ),
      'brick_centered_inner_margins_showhider' => 
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
      'brick_content_type_widths_and_floats' => 
      array (
        'value' => '',
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
        'value' => 'right',
      ),
      'brick_content_type_help' => 
      array (
        'value' => '',
      ),
      'brick_class_name' => 
      array (
        'value' => '',
      ),
      'brick_bg_image' => 
      array (
        'value' => '',
      ),
      'brick_display_type' => 
      array (
        'value' => '',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '100',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#141010',
      ),
      'brick_bg_color_opacity' => 
      array (
        'value' => '100',
      ),
      'brick_alignment' => 
      array (
        'value' => 'leftright',
      ),
      'brick_text_media_type_description' => 
      array (
        'value' => '',
      ),
      'brick_line_1_color' => 
      array (
        'value' => '#ffffff',
      ),
      'brick_line_1_font_size' => 
      array (
        'value' => '17',
      ),
      'brick_line_1_google_font' => 
      array (
        'value' => '',
      ),
      'brick_text_line_1' => 
      array (
        'value' => '&lt;p&gt;&lt;strong&gt;&Acirc;&copy;&Acirc;&nbsp;Launchstack Theme&Acirc;&nbsp;Demo&lt;/strong&gt;&lt;/p&gt;',
      ),
      'brick_line_2_color' => 
      array (
        'value' => '',
      ),
      'brick_line_2_font_size' => 
      array (
        'value' => '',
      ),
      'brick_line_2_google_font' => 
      array (
        'value' => '',
      ),
      'brick_text_line_2' => 
      array (
        'value' => '',
      ),
      'brick_main_image' => 
      array (
        'value' => '',
      ),
      'brick_main_image_max_width' => 
      array (
        'value' => '',
      ),
      'brick_main_image_link_url' => 
      array (
        'value' => '',
      ),
      'brick_video_url' => 
      array (
        'value' => '',
      ),
      'brick_video_max_width' => 
      array (
        'value' => '',
      ),
      'mailchimp_api_key' => 
      array (
        'value' => '',
      ),
      'mailchimp_list_id' => 
      array (
        'value' => '',
      ),
      'mailchimp_messages_showhider' => 
      array (
        'value' => '',
      ),
      'mailchimp_success_message' => 
      array (
        'value' => '',
      ),
      'mailchimp_message_color' => 
      array (
        'value' => '',
      ),
      'mailchimp_submit_button_color_showhider' => 
      array (
        'value' => '',
      ),
      'mailchimp_submit_button_text' => 
      array (
        'value' => '',
      ),
      'mailchimp_submit_button_color' => 
      array (
        'value' => '',
      ),
      'mailchimp_submit_button_text_color' => 
      array (
        'value' => '',
      ),
      'mailchimp_mouseover_submit_button_color' => 
      array (
        'value' => '',
      ),
      'mailchimp_mouseover_submit_button_text_color' => 
      array (
        'value' => '',
      ),
      'mailchimp_submit_button_fontsize' => 
      array (
        'value' => '',
      ),
      'mailchimp_emailfield_settings_showhider' => 
      array (
        'value' => '',
      ),
      'mailchimp_email_input_field_width' => 
      array (
        'value' => '',
      ),
      'mailchimp_email_input_field_fontsize' => 
      array (
        'value' => '',
      ),
      'mailchimp_overall_size_settings_showhider' => 
      array (
        'value' => '',
      ),
      'mailchimp_overall_height' => 
      array (
        'value' => '',
      ),
      'mailchimp_overall_corner_radius' => 
      array (
        'value' => '',
      ),
      'brick_second_video_url' => 
      array (
        'value' => '',
      ),
      'brick_second_video_max_width' => 
      array (
        'value' => '',
      ),
      'brick_second__content_type_help' => 
      array (
        'value' => '',
      ),
      'feature_settings_description' => 
      array (
        'value' => '',
      ),
      'features_per_row' => 
      array (
        'value' => '',
      ),
      'feature_text_color' => 
      array (
        'value' => '',
      ),
      'feature_alignment' => 
      array (
        'value' => '',
      ),
      'feature_icon_size' => 
      array (
        'value' => '',
      ),
      'feature_icon_vertical_alignment' => 
      array (
        'value' => '',
      ),
      'feature_title_size' => 
      array (
        'value' => '',
      ),
      'feature_text_size' => 
      array (
        'value' => '',
      ),
      'feature_description' => 
      array (
        'value' => '',
      ),
      'mp_features_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'feature_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'postgrid_taxonomy_term' => 
      array (
        'value' => '',
      ),
      'postgrid_per_row' => 
      array (
        'value' => '',
      ),
      'postgrid_per_page' => 
      array (
        'value' => '',
      ),
      'postgrid_post_spacing' => 
      array (
        'value' => '',
      ),
      'postgrid_show_featured_images' => 
      array (
        'value' => '',
      ),
      'postgrid_featured_images_width' => 
      array (
        'value' => '',
      ),
      'postgrid_featured_images_height' => 
      array (
        'value' => '',
      ),
      'postgrid_show_title_and_text' => 
      array (
        'value' => '',
      ),
      'postgrid_title_color' => 
      array (
        'value' => '',
      ),
      'postgrid_title_size' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_color' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_size' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_word_limit' => 
      array (
        'value' => '',
      ),
      'postgrid_show_load_more_button' => 
      array (
        'value' => '',
      ),
      'postgrid_load_more_button_color' => 
      array (
        'value' => '',
      ),
      'postgrid_load_more_button_text_color' => 
      array (
        'value' => '',
      ),
      'postgrid_mouse_over_load_more_button_color' => 
      array (
        'value' => '',
      ),
      'postgrid_mouse_over_load_more_button_text_color' => 
      array (
        'value' => '',
      ),
      'sociallinks_per_row' => 
      array (
        'value' => '14',
      ),
      'sociallinks_spacing' => 
      array (
        'value' => '4',
      ),
      'sociallinks_size' => 
      array (
        'value' => '25',
      ),
      'sociallinks_color' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_color_hover' => 
      array (
        'value' => '#f4f4f4',
      ),
      'sociallink_description' => 
      array (
        'value' => '',
      ),
      'widgets_per_row' => 
      array (
        'value' => '',
      ),
      'widgets_title_showhider' => 
      array (
        'value' => '',
      ),
      'widgets_title_color' => 
      array (
        'value' => '',
      ),
      'widgets_title_size' => 
      array (
        'value' => '',
      ),
      'widgets_title_bottom_margin' => 
      array (
        'value' => '',
      ),
      'widgets_text_showhider' => 
      array (
        'value' => '',
      ),
      'widgets_text_color' => 
      array (
        'value' => '',
      ),
      'widgets_text_size' => 
      array (
        'value' => '',
      ),
      'widgets_text_bottom_margin' => 
      array (
        'value' => '',
      ),
      'widgets_links_showhider' => 
      array (
        'value' => '',
      ),
      'widgets_links_color' => 
      array (
        'value' => '',
      ),
      'widgets_links_hover_color' => 
      array (
        'value' => '',
      ),
      'widgets_link_underlines' => 
      array (
        'value' => '',
      ),
      'manage_sidebar' => 
      array (
        'value' => '',
      ),
      'mp_stacks_text_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_line_1_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_line_1_font_size' => 
            array (
              'value' => '17',
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
              'value' => '',
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
      'mp_stacks_slider_images' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'downloadgrid_taxonomy_term' => 
      array (
        'value' => '',
      ),
      'downloadgrid_layout_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_per_row' => 
      array (
        'value' => '',
      ),
      'downloadgrid_per_page' => 
      array (
        'value' => '',
      ),
      'downloadgrid_post_spacing' => 
      array (
        'value' => '',
      ),
      'downloadgrid_featured_images_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_show_featured_images' => 
      array (
        'value' => 'downloadgrid_show_featured_images',
      ),
      'downloadgrid_featured_images_width' => 
      array (
        'value' => '',
      ),
      'downloadgrid_featured_images_height' => 
      array (
        'value' => '',
      ),
      'downloadgrid_featured_images_inner_margin' => 
      array (
        'value' => '',
      ),
      'downloadgrid_featured_images_animation_description' => 
      array (
        'value' => '',
      ),
      'downloadgrid_image_animation_keyframes' => 
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
      'downloadgrid_featured_images_overlay_settings' => 
      array (
        'value' => '',
      ),
      'dl_grid_feat_overlay_img_desc' => 
      array (
        'value' => '',
      ),
      'downloadgrid_image_overlay_animation_keyframes' => 
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
      'downloadgrid_title_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_show_titles' => 
      array (
        'value' => 'downloadgrid_show_titles',
      ),
      'downloadgrid_titles_placement' => 
      array (
        'value' => '',
      ),
      'downloadgrid_title_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_title_size' => 
      array (
        'value' => '',
      ),
      'downloadgrid_title_leading' => 
      array (
        'value' => '',
      ),
      'downloadgrid_title_animation_description' => 
      array (
        'value' => '',
      ),
      'downloadgrid_title_animation_keyframes' => 
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
      'downloadgrid_title_background_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_show_title_backgrounds' => 
      array (
        'value' => '',
      ),
      'downloadgrid_title_background_padding' => 
      array (
        'value' => '',
      ),
      'downloadgrid_title_background_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_title_background_opacity' => 
      array (
        'value' => '50',
      ),
      'downloadgrid_excerpt_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_show_excerpts' => 
      array (
        'value' => 'downloadgrid_show_excerpts',
      ),
      'downloadgrid_excerpt_placement' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_size' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_leading' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_word_limit' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_animation_description' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_animation_keyframes' => 
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
      'downloadgrid_excerpt_background_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_show_excerpt_backgrounds' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_background_padding' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_background_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_background_opacity' => 
      array (
        'value' => '50',
      ),
      'downloadgrid_price_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_show_prices' => 
      array (
        'value' => 'downloadgrid_show_prices',
      ),
      'downloadgrid_price_placement' => 
      array (
        'value' => '',
      ),
      'downloadgrid_price_color' => 
      array (
        'value' => '#000',
      ),
      'downloadgrid_price_size' => 
      array (
        'value' => '',
      ),
      'downloadgrid_price_leading' => 
      array (
        'value' => '',
      ),
      'downloadgrid_price_word_limit' => 
      array (
        'value' => '',
      ),
      'downloadgrid_price_animation_description' => 
      array (
        'value' => '',
      ),
      'downloadgrid_price_animation_keyframes' => 
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
      'downloadgrid_price_background_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_show_price_backgrounds' => 
      array (
        'value' => 'downloadgrid_show_price_backgrounds',
      ),
      'downloadgrid_price_background_padding' => 
      array (
        'value' => '',
      ),
      'downloadgrid_price_background_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_price_background_opacity' => 
      array (
        'value' => '50',
      ),
      'downloadgrid_ajax_load_more_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_show_load_more_button' => 
      array (
        'value' => 'downloadgrid_show_load_more_button',
      ),
      'downloadgrid_load_more_button_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_load_more_button_text_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_mouse_over_load_more_button_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_mouse_over_load_more_button_text_color' => 
      array (
        'value' => '',
      ),
      'downloadgrid_load_more_text' => 
      array (
        'value' => '',
      ),
      'mp_stacks_navigation_settings' => 
      array (
        'value' => '',
      ),
      'mp_stacks_show_nav' => 
      array (
        'value' => '',
      ),
      'mp_stacks_nav_color' => 
      array (
        'value' => '',
      ),
      'mp_stacks_slideshow_settings' => 
      array (
        'value' => '',
      ),
      'mp_stacks_slideshow_on' => 
      array (
        'value' => '',
      ),
      'mp_stacks_animation_style' => 
      array (
        'value' => '',
      ),
      'mp_stacks_slider_speed' => 
      array (
        'value' => '',
      ),
      'mp_stacks_slider_sizes' => 
      array (
        'value' => '',
      ),
      'mp_stacks_slider_width' => 
      array (
        'value' => '',
      ),
      'mp_stacks_slider_height' => 
      array (
        'value' => '',
      ),
      'mp_stacks_slider_description' => 
      array (
        'value' => '',
      ),
      'feature_spacing' => 
      array (
        'value' => '20',
      ),
      'mailchimp_email_input_field_fontcolor' => 
      array (
        'value' => '#000',
      ),
      'mp_stacks_second_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_second_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_font_size' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_second_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_second_text' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stacks_sociallinks_links_showhider' => 
      array (
        'value' => '',
      ),
      'mp_stacks_sociallinks_layout_showhider' => 
      array (
        'value' => '',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '50',
      ),
      'brick_bg_image_showhider' => 
      array (
        'value' => '',
      ),
      'brick_bg_color_showhider' => 
      array (
        'value' => '',
      ),
      'downloadgrid_masonry' => 
      array (
        'value' => 'downloadgrid_masonry',
      ),
      'downloadgrid_featured_images_show' => 
      array (
        'value' => 'downloadgrid_featured_images_show',
      ),
      'downloadgrid_title_show' => 
      array (
        'value' => 'downloadgrid_title_show',
      ),
      'downloadgrid_title_placement' => 
      array (
        'value' => 'below_image_left',
      ),
      'downloadgrid_title_lineheight' => 
      array (
        'value' => '20',
      ),
      'downloadgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'downloadgrid_excerpt_show' => 
      array (
        'value' => 'downloadgrid_excerpt_show',
      ),
      'downloadgrid_excerpt_lineheight' => 
      array (
        'value' => '18',
      ),
      'downloadgrid_excerpt_read_more_text' => 
      array (
        'value' => 'Read More',
      ),
      'downloadgrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'downloadgrid_price_show' => 
      array (
        'value' => 'downloadgrid_price_show',
      ),
      'downloadgrid_price_background_show' => 
      array (
        'value' => 'downloadgrid_price_background_show',
      ),
      'downloadgrid_load_more_settings' => 
      array (
        'value' => '',
      ),
      'downloadgrid_load_more_behaviour' => 
      array (
        'value' => 'ajax_load_more',
      ),
      'downloadgrid_load_more_float' => 
      array (
        'value' => 'center',
      ),
      'downloadgrid_load_more_button_color_mouse_over' => 
      array (
        'value' => '',
      ),
      'downloadgrid_load_more_button_text_color_mouse_over' => 
      array (
        'value' => '',
      ),
      'downloadgrid_load_more_button_text' => 
      array (
        'value' => 'Load More',
      ),
      'feature_grid_layout_showhider' => 
      array (
        'value' => '',
      ),
      'feature_icon_dropshadow_showhider' => 
      array (
        'value' => '',
      ),
      'feature_shadow_apply_to' => 
      array (
        'value' => '""',
      ),
      'feature_shadow_x' => 
      array (
        'value' => '50',
      ),
      'feature_shadow_y' => 
      array (
        'value' => '50',
      ),
      'feature_shadow_blur' => 
      array (
        'value' => '50',
      ),
      'feature_shadow_color' => 
      array (
        'value' => '#000',
      ),
      'feature_shadow_opacity' => 
      array (
        'value' => '100',
      ),
      'feature_text_design_showhider' => 
      array (
        'value' => '',
      ),
      'feature_icon_design_showhider' => 
      array (
        'value' => '',
      ),
      'feature_icon_corner_radius' => 
      array (
        'value' => '0',
      ),
      'feature_icon_stroke_showhider' => 
      array (
        'value' => '',
      ),
      'feature_icon_stroke_apply_to' => 
      array (
        'value' => '""',
      ),
      'feature_icon_stroke_size' => 
      array (
        'value' => '0',
      ),
      'feature_icon_stroke_color' => 
      array (
        'value' => '#fff',
      ),
      'feature_icon_stroke_opacity' => 
      array (
        'value' => '100',
      ),
      'mailchimp_email_input_field_backgroundcolor' => 
      array (
        'value' => '#FFF',
      ),
      'postgrid_layout_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_masonry' => 
      array (
        'value' => 'postgrid_masonry',
      ),
      'postgrid_featured_images_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_featured_images_show' => 
      array (
        'value' => 'postgrid_featured_images_show',
      ),
      'postgrid_featured_images_inner_margin' => 
      array (
        'value' => '20',
      ),
      'postgrid_featured_images_animation_description' => 
      array (
        'value' => '',
      ),
      'postgrid_image_animation_keyframes' => 
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
      'postgrid_featured_images_overlay_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_feat_overlay_img_desc' => 
      array (
        'value' => '',
      ),
      'postgrid_image_overlay_animation_keyframes' => 
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
      'postgrid_title_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_title_show' => 
      array (
        'value' => 'postgrid_title_show',
      ),
      'postgrid_title_placement' => 
      array (
        'value' => 'below_image_left',
      ),
      'postgrid_title_lineheight' => 
      array (
        'value' => '20',
      ),
      'postgrid_title_animation_description' => 
      array (
        'value' => '',
      ),
      'postgrid_title_animation_keyframes' => 
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
      'postgrid_title_background_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'postgrid_title_background_padding' => 
      array (
        'value' => '5',
      ),
      'postgrid_title_background_color' => 
      array (
        'value' => '#FFF',
      ),
      'postgrid_title_background_opacity' => 
      array (
        'value' => '100',
      ),
      'postgrid_date_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_date_show' => 
      array (
        'value' => 'postgrid_date_show',
      ),
      'postgrid_date_placement' => 
      array (
        'value' => 'below_image_left',
      ),
      'postgrid_date_color' => 
      array (
        'value' => '#000',
      ),
      'postgrid_date_size' => 
      array (
        'value' => '13',
      ),
      'postgrid_date_animation_description' => 
      array (
        'value' => '',
      ),
      'postgrid_date_animation_keyframes' => 
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
      'postgrid_date_background_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_date_background_show' => 
      array (
        'value' => 'postgrid_date_background_show',
      ),
      'postgrid_date_background_padding' => 
      array (
        'value' => '5',
      ),
      'postgrid_date_background_color' => 
      array (
        'value' => '#FFF',
      ),
      'postgrid_date_background_opacity' => 
      array (
        'value' => '100',
      ),
      'postgrid_excerpt_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_show' => 
      array (
        'value' => 'postgrid_excerpt_show',
      ),
      'postgrid_excerpt_placement' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_lineheight' => 
      array (
        'value' => '18',
      ),
      'postgrid_excerpt_animation_description' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_animation_keyframes' => 
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
      'postgrid_excerpt_read_more_text' => 
      array (
        'value' => 'Read More',
      ),
      'postgrid_excerpt_background_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_background_padding' => 
      array (
        'value' => '5',
      ),
      'postgrid_excerpt_background_color' => 
      array (
        'value' => '#FFF',
      ),
      'postgrid_excerpt_background_opacity' => 
      array (
        'value' => '100',
      ),
      'postgrid_load_more_settings' => 
      array (
        'value' => '',
      ),
      'postgrid_load_more_behaviour' => 
      array (
        'value' => 'ajax_load_more',
      ),
      'postgrid_load_more_float' => 
      array (
        'value' => 'center',
      ),
      'postgrid_load_more_button_color_mouse_over' => 
      array (
        'value' => '',
      ),
      'postgrid_load_more_button_text_color_mouse_over' => 
      array (
        'value' => '',
      ),
      'postgrid_load_more_button_text' => 
      array (
        'value' => 'Load More',
      ),
      'brick_min_below' => 
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