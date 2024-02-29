<?php 
	$royalwatchstore_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$royalwatchstore_breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img');
	$royalwatchstore_breadcrumb_back_attach		= get_theme_mod('breadcrumb_back_attach','scroll');
	
if($royalwatchstore_hs_breadcrumb == '1') {	
?>	

	<!-- Slider Area -->   
	<?php if(!empty($royalwatchstore_breadcrumb_bg_img)): ?>
    <section class="slider-area breadcrumb-section" style="background: url(<?php echo esc_url($royalwatchstore_breadcrumb_bg_img); ?>) center center <?php echo esc_attr($royalwatchstore_breadcrumb_back_attach); ?>; background-repeat: no-repeat; background-size: cover;">
	<?php else: ?>
	 <section class="slider-area breadcrumb-section">
	 	<div class="headoly"></div>
	 <?php endif; ?>
        <div class="container-fulid">
            <div class="about-banner-text">   
            	
				<h1><?php royalwatchstore_breadcrumb_title(); ?></h1>
				
				<ol class="breadcrumb-list">
					<?php royalwatchstore_breadcrumbs(); ?>
				</ol>



            </div>
        </div> 

    </section>
    <!-- End Slider Area -->
<?php }else{  ?>
	<section style="padding: 30px 0 30px;"></section>
<?php } ?>	