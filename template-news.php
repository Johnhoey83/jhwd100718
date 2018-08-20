<?php
/**
 * Template Name: News
 *
 */

get_header(); ?>


<div class="container">
	<div class="row">

	<div id="primary" class="col-md-12 col-lg-12">
		<main id="main" class="site-main news" role="main">
		<h2>Latest News</h2>
			<?php 
			// the query
			$the_query = new WP_Query( array('post_type' => 'news') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<div class="row">		
					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


					<div class="col-sm-6 col-md-4">
						<div class="news-item">
							<a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
							</a>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn-warning">Read More</a>
						</div>
					</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

				</div> <!-- .row -->
				

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			
		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>