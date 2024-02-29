<?php
/**
 * side bar template
 *
 * @package Royal Watch Store
 */
?>
<?php if ( ! is_active_sidebar( 'royal-watch-store-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('royal-watch-store-woocommerce-sidebar'); ?>
	</div>
</div>