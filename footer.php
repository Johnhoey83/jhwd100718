<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strapped
 */

?>

	</div><!-- #content -->
  </div><!-- container -->


	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
			<div class="row">
			
			<div class="col-md-6 col-lg-6">
				<?php if (has_nav_menu('footer-menu', 'bootstrapwp')) { ?>
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
			<div class="col-md-6 col-lg-6">
			<div class="site-info">
  			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'strapped' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'strapped' ), 'WordPress' ); ?></a>
  			<span class="sep"> | </span>
  			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'strapped' ), 'strapped', '<a href="http://braginteractive.com" rel="designer">Brad Williams</a>' ); ?>
  		</div><!-- .site-info -->
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>