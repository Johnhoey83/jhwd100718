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
   
  </div>
  </div>

<div class="container">
  <div class="row main-content">
    <div class="col-md-4">
      <h2>We Offer... </h2>
      <p>Affordable, practical, hands-on advice, help and support to you, the Business Leader, looking to improve your business performance through Operational Excellence and Lean Operations application.  </p>
      
    </div>
    <div class="col-md-4">
    <h2>Our Background... </h2>
      <p>Over 30 years of experience in successfully designing, delivering and deploying Operational Excellence strategies in organisations large and small ranging across a variety of industries both in the UK and internationally. </p>
     
    </div>
    <div class="col-md-4">
    <h2>We Are... </h2>
      <p>Proven international specialists in the area of Operational Excellence. We have applied our expertise across a broad spectrum of industry sectors, providing education, training and practical implementation assistance.</p>
      
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
    <img class="featurette-image img-fluid mx-auto home-feat-img" src="/wp-content/uploads/2018/08/f1.png" alt="f1 car" style="width: 100%;">
</div>
</div>




				</div> <!-- .row -->
				





<!-- /END THE FEATURETTES -->



<?php get_footer(); ?>