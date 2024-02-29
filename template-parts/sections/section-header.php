<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		$stickyheader = esc_attr(royalwatchstore_sticky_menu());
	?>
<div class="main">
    <header class="main-header site-header <?php echo esc_attr(royalwatchstore_sticky_menu()); ?>">
		<!-- <div class="container-fluid"> -->
		<div class="tpf-head">
			<div class="container">
				<div class="row m-0">
					<div class="col-lg-3 col-md-3 col-sm-12 ">
						<p>
							<?php echo esc_html(get_theme_mod('announcementbar_text')); ?>
						</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 fm-dec">
						<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
							<?php //this prints out your search form 
								get_search_form(); 
							?>
							<div class="clearfix"></div>
						<?php } ?>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12">
						<div class="social-icon">
							<li><a href="<?php echo esc_url(get_theme_mod('header_fblink')); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo esc_url(get_theme_mod('header_twitterlink')); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo esc_url(get_theme_mod('header_instagramlink')); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo esc_url(get_theme_mod('header_linkedinlink')); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bpf-head">
			<div class="container">
				<div class="headfer-content row m-0">
					<div class="col-lg-3 col-md-3 col-sm-12 pd-0 logo-box">
						<div class="site-logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
							?>
							<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
								<?php 
									echo esc_html(bloginfo('name'));
								?>
							</a>	
							<?php 						
								}
							?>
						</div>
						<div class="box-info">
							<?php
								$royalwatchstore_site_desc = get_bloginfo( 'description');
								if ($royalwatchstore_site_desc) : ?>
									<p class="site-description"><?php echo esc_html($royalwatchstore_site_desc); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-12 pd-0">
						<div class="row m-0">
							<div class="menu">
								<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-icon">
											<i class="fa fa-bars"></i>
										</span>
									</span>
								</button><!-- .nav-toggle -->
								<div class="header-navigation-wrapper">

								<?php
								if ( has_nav_menu( 'primary_menu' ) || ! has_nav_menu( 'expanded' ) ) {
								?>

									<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'royal-watch-store' ); ?>">

										<ul class="primary-menu reset-list-style">

										<?php
										if ( has_nav_menu( 'primary_menu' ) ) {

											wp_nav_menu(
												array(
													'container'  => '',
													'items_wrap' => '%3$s',
													'theme_location' => 'primary_menu',
												)
											);

										} elseif ( ! has_nav_menu( 'expanded' ) ) {

											wp_list_pages(
												array(
													'match_menu_classes' => true,
													'show_sub_menu_icons' => true,
													'title_li' => false,
													'walker'   => new RoyalWatchStore_Walker_Page(),
												)
											);

										}
										?>
										</ul>
									</nav><!-- .primary-menu-wrapper -->

								<?php } ?>
								</div><!-- .header-navigation-wrapper -->
								<?php
								// Output the menu modal.
								get_template_part( 'template-parts/sections/modal-menu' );
								?>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 icon">
						<?php if(class_exists('woocommerce')){ ?>
							<li>
								<a class="signin" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
									<i class="fa fa-user" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a class="h-cart" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" >
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								</a>
							</li>
						<?php } ?>
					</div>			
				</div>
			</div>
		</div>
    </header>
	<div class="clearfix"></div>
</div>

