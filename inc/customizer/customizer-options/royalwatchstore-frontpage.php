<?php
function royalwatchstore_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'royalwatchstore_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'royal-watch-store' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'royal-watch-store' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1500*600','royal-watch-store'),
			'priority' => 1,
			'panel' => 'royalwatchstore_frontpage_sections',
		)
	);



	$wp_customize->add_setting('royalwatchstore_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new royalwatchstore_Tab_Control($wp_customize, 'royalwatchstore_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'royal-watch-store'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6',
				'slider_subtitle',
				'slider_list1',
				'slider_list2'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'royal-watch-store'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'slider_subtitlecolor',
                'slider_titlecolor',
				'slider_titlebordcolor',
                'slider_descriptioncolor',
				'slider_listcolor',
                'slider_btntxt1color',
				'slider_btntxthovercolor'

            ),
     	),
		 array(
            'name' => esc_html__('Layout', 'royal-watch-store'),
            'icon' => 'dashicons dashicons-layout',
            'fields' => array(
                'royalwatchstore_slider_section_width'
            ),
         )
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// slider_subtitle
	$slider_subtitle = esc_html__('', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_subtitle',
    	array(
			'default' => $slider_subtitle,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider_subtitle',
		array(
		    'label'   		=> __('Sub Title','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// slider_list1
	$slider_list1 = esc_html__('', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_list1',
    	array(
			'default' => $slider_list1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider_list1',
		array(
		    'label'   		=> __('List 1','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// slider_list2
	$slider_list2 = esc_html__('', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_list2',
    	array(
			'default' => $slider_list2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider_list2',
		array(
		    'label'   		=> __('List 2','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);




	// Style setting

	// slider subtitle Color
	$slidersubtitlecolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_subtitlecolor',
    	array(
			'default' => $slidersubtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_subtitlecolor',
		array(
		    'label'   		=> __('Sub Title Color','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider titlebord Color
	$slidertitlebordcolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_titlebordcolor',
    	array(
			'default' => $slidertitlebordcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlebordcolor',
		array(
		    'label'   		=> __('Border Color','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider list Color
	$sliderlistcolor = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_listcolor',
    	array(
			'default' => $sliderlistcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_listcolor',
		array(
		    'label'   		=> __('List Color','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#fff', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text & Border Color','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider btntxthover Color
	$sliderbtntxthovercolor = esc_html__('#fe0000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'slider_btntxthovercolor',
    	array(
			'default' => $sliderbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','royal-watch-store'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting

	$wp_customize->add_setting('royalwatchstore_slider_section_width',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'royalwatchstore_sanitize_choices',
    ));
    $wp_customize->add_control('royalwatchstore_slider_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','royal-watch-store'),
        'choices' => array (
            'Box Width' => __('Box Width','royal-watch-store'),
            'Full Width' => __('Full Width','royal-watch-store')
        ),
        'section' => 'slider_setting',
    ));

	

	/*=========================================
	collection Section
	=========================================*/
	$wp_customize->add_section(
		'collection_setting', array(
			'title' => esc_html__( 'Categories Section', 'royal-watch-store' ),
			'priority' => 2,
			'panel' => 'royalwatchstore_frontpage_sections',
		)
	);

	$wp_customize->add_setting('royalwatchstore_collection_tabs', array(
		'sanitize_callback' => 'wp_kses_post',
	 ));
 
	 $wp_customize->add_control(new royalwatchstore_Tab_Control($wp_customize, 'royalwatchstore_collection_tabs', array(
		'section' => 'collection_setting',
		'priority' => 2,
		'buttons' => array(
		   array(
			  'name' => esc_html__('General', 'royal-watch-store'),
			 'icon' => 'dashicons dashicons-welcome-write-blog',
			 'fields' => array(
				 'collection_heading',
			 ),
			 'active' => true,
		  ),
		   array(
			 'name' => esc_html__('Style', 'royal-watch-store'),
			 'icon' => 'dashicons dashicons-art',
			 'fields' => array(
				 'collection_headingcolor',
				 'collection_headingbordcolor',
				 'collection_titlecolor',
				 'collection_titlehovercolor'
			 ),
		  ),
		  array(
			 'name' => esc_html__('Layout', 'royal-watch-store'),
			 'icon' => 'dashicons dashicons-layout',
			 'fields' => array(
				 'royalwatchstore_collection_section_width'
			 ),
		  )
		 
		 ),
	 ))); 


	// General

	// collection title
	$collectionheading = esc_html__('TOP CATEGORIES', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'collection_heading',
    	array(
			'default' => $collectionheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'collection_heading',
		array(
		    'label'   		=> __('Heading','royal-watch-store'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Style setting

	// collection heading Color
	$collectionheadingcolor = esc_html__('#3f3f3f', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'collection_headingcolor',
    	array(
			'default' => $collectionheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_headingcolor',
		array(
		    'label'   		=> __('Heading Color','royal-watch-store'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection headingbord Color
	$collectionheadingbordcolor = esc_html__('#aaaaaa', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'collection_headingbordcolor',
    	array(
			'default' => $collectionheadingbordcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_headingbordcolor',
		array(
		    'label'   		=> __('Heading Border Color','royal-watch-store'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection title Color
	$collectiontitlecolor = esc_html__('#6d6d6d', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'collection_titlecolor',
    	array(
			'default' => $collectiontitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_titlecolor',
		array(
		    'label'   		=> __('Title Color','royal-watch-store'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection titlehover Color
	$collectiontitlehovercolor = esc_html__('#fe0000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'collection_titlehovercolor',
    	array(
			'default' => $collectiontitlehovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_titlehovercolor',
		array(
		    'label'   		=> __('Title Hover Color','royal-watch-store'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting

	$wp_customize->add_setting('royalwatchstore_collection_section_width',array(
		'default' => 'Box Width',
		'sanitize_callback' => 'royalwatchstore_sanitize_choices',
	));
	$wp_customize->add_control('royalwatchstore_collection_section_width',array(
		'type' => 'select',
		'label' => __('Section Width','royal-watch-store'),
		'choices' => array (
			'Box Width' => __('Box Width','royal-watch-store'),
			'Full Width' => __('Full Width','royal-watch-store')
		),
		'section' => 'collection_setting',
	));
	
	

	/*=========================================
	featuredproduct Section
	=========================================*/
	$wp_customize->add_section(
		'featuredproduct_setting', array(
			'title' => esc_html__( 'Featured Product Section', 'royal-watch-store' ),
			'priority' => 2,
			'panel' => 'royalwatchstore_frontpage_sections',
		)
	);

	$wp_customize->add_setting('royalwatchstore_featuredproduct_tabs', array(
		'sanitize_callback' => 'wp_kses_post',
	 ));
 
	 $wp_customize->add_control(new royalwatchstore_Tab_Control($wp_customize, 'royalwatchstore_featuredproduct_tabs', array(
		'section' => 'featuredproduct_setting',
		'priority' => 2,
		'buttons' => array(
		   array(
			  'name' => esc_html__('General', 'royal-watch-store'),
			 'icon' => 'dashicons dashicons-welcome-write-blog',
			 'fields' => array(
				 'featuredproduct_heading',
			 ),
			 'active' => true,
		  ),
		   array(
			 'name' => esc_html__('Style', 'royal-watch-store'),
			 'icon' => 'dashicons dashicons-art',
			 'fields' => array(
				 'featuredproduct_headingcolor',
				 'featuredproduct_headingbrdcolor',
				 'featuredproduct_categorycolor',
				 'featuredproduct_titlecolor',
				 'featuredproduct_regularpricecolor',
				 'featuredproduct_salepricecolor'
			 ),
		  ),
		  array(
			 'name' => esc_html__('Layout', 'royal-watch-store'),
			 'icon' => 'dashicons dashicons-layout',
			 'fields' => array(
				 'royalwatchstore_featuredproduct_section_width'
			 ),
		  )
		 
		 ),
	 ))); 


	//  Genral Settings

	// featuredproduct title
	$featuredproductheading = esc_html__('FEATURED PRODUCT', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'featuredproduct_heading',
    	array(
			'default' => $featuredproductheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_heading',
		array(
		    'label'   		=> __('Heading','royal-watch-store'),
		    'section'		=> 'featuredproduct_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	

	// Style setting

	// featuredproduct heading Color
	$featuredproductheadingcolor = esc_html__('#3f3f3f', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'featuredproduct_headingcolor',
    	array(
			'default' => $featuredproductheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_headingcolor',
		array(
		    'label'   		=> __('Heading Color','royal-watch-store'),
		    'section'		=> 'featuredproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// featuredproduct headingbrd Color
	$featuredproductheadingbrdcolor = esc_html__('#aaaaaa', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'featuredproduct_headingbrdcolor',
    	array(
			'default' => $featuredproductheadingbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_headingbrdcolor',
		array(
		    'label'   		=> __('Heading Border Color','royal-watch-store'),
		    'section'		=> 'featuredproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// featuredproduct category Color
	$featuredproductcategorycolor = esc_html__('#424242', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'featuredproduct_categorycolor',
    	array(
			'default' => $featuredproductcategorycolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_categorycolor',
		array(
		    'label'   		=> __('Category Color','royal-watch-store'),
		    'section'		=> 'featuredproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featuredproduct title Color
	$featuredproducttitlecolor = esc_html__('#424242', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'featuredproduct_titlecolor',
    	array(
			'default' => $featuredproducttitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_titlecolor',
		array(
		    'label'   		=> __('Title Color','royal-watch-store'),
		    'section'		=> 'featuredproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featuredproduct price Color
	$featuredproductpricecolor = esc_html__('#424242', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'featuredproduct_regularpricecolor',
    	array(
			'default' => $featuredproductpricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_regularpricecolor',
		array(
		    'label'   		=> __('Regular Price Color','royal-watch-store'),
		    'section'		=> 'featuredproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featuredproduct price Color
	$featuredproductpricecolor = esc_html__('#fe0000', 'royal-watch-store' );
	$wp_customize->add_setting(
    	'featuredproduct_salepricecolor',
    	array(
			'default' => $featuredproductpricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_salepricecolor',
		array(
		    'label'   		=> __('Sale Price Color','royal-watch-store'),
		    'section'		=> 'featuredproduct_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// layout setting

	$wp_customize->add_setting('royalwatchstore_featuredproduct_section_width',array(
		'default' => 'Box Width',
		'sanitize_callback' => 'royalwatchstore_sanitize_choices',
	));
	$wp_customize->add_control('royalwatchstore_featuredproduct_section_width',array(
		'type' => 'select',
		'label' => __('Section Width','royal-watch-store'),
		'choices' => array (
			'Box Width' => __('Box Width','royal-watch-store'),
			'Full Width' => __('Full Width','royal-watch-store')
		),
		'section' => 'featuredproduct_setting',
	));
		
	



	$wp_customize->register_control_type('royalwatchstore_Tab_Control');

}

add_action( 'customize_register', 'royalwatchstore_blog_setting' );

// service selective refresh
function royalwatchstore_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'royalwatchstore_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'royalwatchstore_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'royalwatchstore_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'royalwatchstore_blog_section_partials' );

// blog_title
function royalwatchstore_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function royalwatchstore_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function royalwatchstore_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


