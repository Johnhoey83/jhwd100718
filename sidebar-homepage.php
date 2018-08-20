<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jhwd
 */

if ( ! is_active_sidebar( 'sidebar-homepage' ) ) {
	return;
}
?>
<div class="container">
<div class="widget-area col-md-12 col-lg-12" role="complementary">
	<div class="news-item-home">
		<?php dynamic_sidebar( 'sidebar-homepage' ); ?>
</div>
</div>
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->