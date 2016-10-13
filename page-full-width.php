<?php
/*
  Template Name: Full Width Template
*/

?>
<?php get_header(); ?>

  <div class="container">   
    <div class="row">
      
      <div class="col-md-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         

          <?php the_post_thumbnail('large', array( 'class' => 'hide-img' )); ?>
         

          <div class="full-width">
          <h1><?php the_title(); ?></h1>

          <?php the_content(); ?>

          </div>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

      </div>   <!--end column-->   
    </div>  <!--end row-->
  </div>  <!--end container -->
<?php get_footer(); ?>