<?php
function royalwatchstore_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'royal-watch-store'),
		) 
	);

	
	/*=========================================
	Royal Watch Store Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','royal-watch-store'),
			'panel'  		=> 'header_section',
		)
    );


	// topheader Logo Width
    $wp_customize->add_setting('topheader_logowidth',array(
        'default' => 100,
        'sanitize_callback' => 'royalwatchstore_sanitize_float'
    ));
    $wp_customize->add_control(new royalwatchstore_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	    'label' => __('Logo Size','royal-watch-store'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','royal-watch-store'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','royal-watch-store'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Royal Watch Store header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 6,
            'title' 		=> __('Header','royal-watch-store'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('royalwatchstore_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new royalwatchstore_Reset_Custom_Control($wp_customize, 'royal_watch_store_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'royal-watch-store'),
	  'description' => 'royal_watch_store_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('royalwatchstore_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new royalwatchstore_Tab_Control($wp_customize, 'royalwatchstore_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'royal-watch-store'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'announcementbar_text'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'royal-watch-store'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_topheadbgcolor',
				'header_topheadtextcolor',
				'header_searchiconcolor',
				'header_searchiconbgcolor',
				'header_topheadiconscolor',
				'header_topheadiconshvrcolor',
				'header_bgcolor',
            	'header_menuscolor',
            	'header_menushovercolor',
				'header_submenusiconcolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor',
            	'header_iconscolor',
            	'header_iconhover_color'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'royalwatchstore_switch_sanitization'
   	) );
   	$wp_customize->add_control( new royalwatchstore_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','royal-watch-store' ),
        'section' => 'top_header'
   	)));


	// announcementbar text 1
	$announcementbartext = esc_html__('', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'announcementbar_text',
    	array(
			'default' => $announcementbartext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'announcementbar_text',
		array(
		    'label'   		=> __('Top Head Text','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);




	// Style setting

	// header topheadbg Color
	$headertopheadbgcolor = esc_html__('#333333', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_topheadbgcolor',
    	array(
			'default' => $headertopheadbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadbgcolor',
		array(
		    'label'   		=> __('Top Head BG Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadtext Color
	$headertopheadtextcolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_topheadtextcolor',
    	array(
			'default' => $headertopheadtextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadtextcolor',
		array(
		    'label'   		=> __('Top Head Text Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header searchicon Color
	$headersearchiconcolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_searchiconcolor',
    	array(
			'default' => $headersearchiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_searchiconcolor',
		array(
		    'label'   		=> __('Top Head Search Icon Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header searchiconbg Color
	$headersearchiconbgcolor = esc_html__('#fe0000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_searchiconbgcolor',
    	array(
			'default' => $headersearchiconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_searchiconbgcolor',
		array(
		    'label'   		=> __('Top Head Search Icon BG Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadicons Color
	$headertopheadiconscolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_topheadiconscolor',
    	array(
			'default' => $headertopheadiconscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadiconscolor',
		array(
		    'label'   		=> __('Top Head Icons Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadiconshvr Color
	$headertopheadiconshvrcolor = esc_html__('#fe0000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_topheadiconshvrcolor',
    	array(
			'default' => $headertopheadiconshvrcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadiconshvrcolor',
		array(
		    'label'   		=> __('Top Head Icons Hover Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header bg Color
	$headerbgcolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_bgcolor',
    	array(
			'default' => $headerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor',
		array(
		    'label'   		=> __('BG Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menus Color
	$headermenuscolor = esc_html__('#000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menushover Color
	$headermenushovercolor = esc_html__('#fe0000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover & Active Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusicon Color
	$headersubmenusiconcolor = esc_html__('#000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_submenusiconcolor',
    	array(
			'default' => $headersubmenusiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusiconcolor',
		array(
		    'label'   		=> __('Sub Menu Icon Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	$headersubmenusbgcolor = esc_html__('#000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#fe0000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('SubMenus Text Hover Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header icons Color
	$headericonscolor = esc_html__('#000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_iconscolor',
    	array(
			'default' => $headericonscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_iconscolor',
		array(
		    'label'   		=> __('Icons Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header iconhover_color
	$headericonhover_color = esc_html__('#fe0000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'header_iconhover_color',
    	array(
			'default' => $headericonhover_color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_iconhover_color',
		array(
		    'label'   		=> __('Icon Hover Color','royal-watch-store'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('royalwatchstore_Tab_Control');
	$wp_customize->register_panel_type( 'royalwatchstore_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'royalwatchstore_WP_Customize_Section' );

}
add_action( 'customize_register', 'royalwatchstore_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class royalwatchstore_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'royalwatchstore_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class royalwatchstore_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'royalwatchstore_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






