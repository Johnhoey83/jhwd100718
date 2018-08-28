<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jhwd
 */

get_header(); ?>

<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Latest News</h1>
    <p>Advice</p>
  </div>
  </div>
 <!-- /container -->
<div class="container">
<h2>Latest News</h2>


			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('
			<p id="breadcrumbs">','</p>
            ');
        }
			?>

<?php 
			// the query
			$the_query = new WP_Query( array('post_type' => 'news', 'posts_per_page' => 12) ); ?>

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
							<a href="<?php the_permalink(); ?>" class="btn btn-info">Read More</a>
						</div>
					</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

				</div> <!-- .row -->
				

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
</div>



<!-- /END THE FEATURETTES -->



<?php get_footer(); ?>