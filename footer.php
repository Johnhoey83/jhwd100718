<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jhwd
 */

?>

	</div><!-- #content -->
  </div><!-- container -->


	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
			<div class="row">
			
			<div class="col-md-9">
				<?php if (has_nav_menu('footer-menu', 'jhwd')) { ?>
		            <nav role="navigation">
		            <?php wp_nav_menu(array(
		              'container'       => '',
		              'menu_class'      => 'footer-menu',
		              'theme_location'  => 'footer-menu')
		            ); 
		            ?>
		          </nav>
            	<?php } ?>
			</div>
			<div class="col-md-3">
			<div class="site-info">
			  <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'jhwd' ), 'jhwd', '<a href="https://www.johnhoey.co.uk" rel="designer">John Hoey Web Design</a>' ); ?>
			  
  		</div><!-- .site-info -->
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>