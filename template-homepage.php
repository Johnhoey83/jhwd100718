<?php
/**
 *
 * Template Name: Homepage
 *
 * The template for displaying the homepage.
 *
 *
 * @package jhwd
 */

get_header(); ?>


<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Keith Hoey &amp; Associates</h1>
    <p>Affordable. Practical. Hands On.</p>
    <p><a class="btn btn-primary" href="#" role="button">Learn more &raquo;</a></p>
  </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2>We offer </h2>
      <p>Affordable, practical, hands-on advice, help and support to you, the Business Leader, looking to improve your business performance through Operational Excellence and Lean Operations application.  </p>
      <p><a class="btn btn-info" href="#" role="button">Find out more</a></p>
    </div>
    <div class="col-md-4">
      <h2>Our background </h2>
      <p>Over 30 years of experience in successfully designing, delivering and deploying Operational Excellence strategies in organisations large and small ranging across a variety of industries both in the UK and internationally. </p>
      <p><a class="btn btn-info" href="#" role="button">Find out more</a></p>
    </div>
    <div class="col-md-4">
      <h2>We are </h2>
      <p>Proven international specialists in the area of Operational Excellence. We have applied our expertise across a broad spectrum of industry sectors, providing education, training and practical implementation assistance.</p>
      <p><a class="btn btn-info" href="#" role="button">Find out more</a></p>
    </div>
  </div>
  </div>



</div> <!-- /container -->


<!-- START THE FEATURETTES -->

<div class="container">
<hr class="featurette-divider">
<div class="row featurette">
  <div class="col-md-7">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto home-feat-img" src="http://via.placeholder.com/500x350" alt="Generic placeholder image">
</div>
</div>

<hr class="featurette-divider">


</div>
<div class="container">
<h2>Latest News</h2>

<?php 
			// the query
			$the_query = new WP_Query( array('post_type' => 'news', 'posts_per_page' => 3) ); ?>

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