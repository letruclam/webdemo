<?php
function royalwatchstore_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'royalwatchstore_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'royalwatchstore_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'royalwatchstore_custom_header_setup' );

if ( ! function_exists( 'royalwatchstore_header_style' ) ) :

function royalwatchstore_header_style() {
	$header_text_color = get_header_textcolor();

  	$service_disable_section = esc_attr(get_theme_mod('service_disable_section','YES'));
	$topheader_logowidth = esc_attr(get_theme_mod('topheader_logowidth','100'));


	?>
	<style type="text/css">


		<?php 
		
		?>

		.site-logo img {
			width: <?php echo apply_filters('royalwatchstore_topheader', $topheader_logowidth); ?>%;
			height: 100%;
		}


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		


		
	 
	
		header .tpf-head {
			background: <?php echo esc_attr(get_theme_mod('header_topheadbgcolor')); ?>;
		}

		header .tpf-head p {
			color: <?php echo esc_attr(get_theme_mod('header_topheadtextcolor')); ?>;
		}

		button[type="submit"], input[type="button"], input[type="reset"], input[type="submit"] {
			color: <?php echo esc_attr(get_theme_mod('header_searchiconcolor')); ?>;
		}

		header button[type="submit"] {
			background: <?php echo esc_attr(get_theme_mod('header_searchiconbgcolor')); ?>;
		}
		

		.tpf-head .social-icon li i {
			color: <?php echo esc_attr(get_theme_mod('header_topheadiconscolor')); ?>;
		}
		

		.tpf-head .social-icon li i:hover {
			color: <?php echo esc_attr(get_theme_mod('header_topheadiconshvrcolor')); ?>;
		}
		
		
		.bpf-head {
			background: <?php echo esc_attr(get_theme_mod('header_bgcolor')); ?>;
		}

		.primary-menu a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor,
		.primary-menu li.current-menu-item > a, .primary-menu li.current-menu-item > .link-icon-wrapper > a {
			color: <?php echo esc_attr(get_theme_mod('header_menushovercolor')); ?>;
		}

		.primary-menu li ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.primary-menu ul {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu ul::after {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu > li > .icon {
			color: <?php echo esc_attr(get_theme_mod('header_submenusiconcolor')); ?>;
		}

		.primary-menu li ul li a:hover{
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?> !important;
		}

		.bpf-head .icon li i {
			color: <?php echo esc_attr(get_theme_mod('header_iconscolor')); ?> !important;
		}

		.bpf-head .icon li i:hover {
			color: <?php echo esc_attr(get_theme_mod('header_iconhover_color')); ?> !important;
		}
	




		.hero-style .slide-title h5 {
			color: <?php echo esc_attr(get_theme_mod('slider_subtitlecolor')); ?> !important;
		}

		.hero-style .slide-title h2 {
			color: <?php echo esc_attr(get_theme_mod('slider_titlecolor')); ?> !important;
		}

		.hero-style .slide-title {
			border-left-color: <?php echo esc_attr(get_theme_mod('slider_titlebordcolor')); ?> !important;
		}

		.hero-style .slide-text p {
			color: <?php echo esc_attr(get_theme_mod('slider_descriptioncolor')); ?>;
		}

		.hero-style .slide-list li,.hero-style .slide-list ul li:before {
			color: <?php echo esc_attr(get_theme_mod('slider_listcolor')); ?>;
		}

		.hero-style .slide-btns a {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxt1color')); ?> !important;
			border-color: <?php echo esc_attr(get_theme_mod('slider_btntxt1color')); ?> !important;
		}

		.hero-style .slide-btns a:hover {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxthovercolor')); ?> !important;
		}




		#collection-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('collection_headingcolor')); ?>;
		}

		#collection-section .section-title h2:before {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('collection_headingbordcolor')); ?>;
		}

		#collection-section .pro-cat-content h5 a {
			color: <?php echo esc_attr(get_theme_mod('collection_titlecolor')); ?>;
		}

		#collection-section .pro-cat-content h5 a:hover {
			color: <?php echo esc_attr(get_theme_mod('collection_titlehovercolor')); ?>;
		}

		
	

		#featuredproduct-product-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('featuredproduct_headingcolor')); ?>;
		}

		#featuredproduct-product-section .section-title h2:before {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('featuredproduct_headingbrdcolor')); ?>;
		}

		#featuredproduct-product-section .pcontent {
			color: <?php echo esc_attr(get_theme_mod('featuredproduct_categorycolor')); ?>;
		}

		#featuredproduct-product-section .pcontent h3  {
			color: <?php echo esc_attr(get_theme_mod('featuredproduct_titlecolor')); ?>;
		}

		#featuredproduct-product-section .regular-price,#featuredproduct-product-section .regular-price .woocommerce-Price-amount.amount{
			color: <?php echo esc_attr(get_theme_mod('featuredproduct_regularpricecolor')); ?>;
		}

		#featuredproduct-product-section .sale-price .woocommerce-Price-amount.amount{
			color: <?php echo esc_attr(get_theme_mod('featuredproduct_salepricecolor')); ?>;
		}

		



		.copy-right {
			background: <?php echo esc_attr(get_theme_mod('footer_copyrightbgcolor')); ?>;
		}

		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li:before,.footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		.footer-area {
			background: <?php echo esc_attr(get_theme_mod('footer_bgcolor')); ?>;
		}

		.footer-area .f-oly {
			background: <?php echo esc_attr(get_theme_mod('footer_boxbgcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($service_disable_section == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
