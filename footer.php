</div>
<footer class="footer-area">  
	<div class="footer-top">
		<div class="container content"> 
			<div class="f-innbx">
			<div class="f-oly"></div>
			 <?php do_action('royalwatchstore_footer_above'); 
			  if ( is_active_sidebar( 'royal-watch-store-footer-widget-area' ) ) { ?>	
				 <div class="row footer-row"> 
					 <?php  dynamic_sidebar( 'royal-watch-store-footer-widget-area' ); ?>
				 </div>  
			 <?php } ?>
			</div>
		 </div>
	</div>
	
	<?php 
		$footer_copyright = get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');

		
	?>
	<div class="copy-right"> 
		<div class="container"> 

			<?php 
			if ( ! empty( $footer_copyright ) ): ?>
			<?php 	
				$royalwatchstore_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="https://www.buywpthemes.net/products/free-watch-store-wordpress-theme/" target="_blank">Royal Watch Store</a>', 'royal-watch-store')),
				);
			?>
		</div> 
		<div class="copyright-text">
			<div class="container">   
				<div class="row m-0"> 
					<div class="col-md-12 m-0">                         
						<p >
							<?php
								echo apply_filters('royalwatchstore_footer_copyright', wp_kses_post(royalwatchstore_str_replace_assoc($royalwatchstore_copyright_allowed_tags, $footer_copyright)));
							?>
						</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer Area  -->

<button class="scroll-top">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

</div>		
<?php wp_footer(); ?>
</body>
</html>

