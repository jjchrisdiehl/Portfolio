<?php get_header(); ?>
<div class="mask"></div>
  <div class="container-fluid single-header">   

    <div class="page-header">
      
      <div class="row">

        <div class="col-xs-12">
        <h1><?php single_post_title(); ?></h1>
        <h2 class="lead">Some lead text going on. </h2>  
        <p> <a href="<?php bloginfo('url'); ?>">Home</a> > <a href="<?php bloginfo('url'); ?>/blog/portfolio/laptops/">Ian Berg</a>
        </div>

      </div>      

    </div>

  </div>


    <div class="container content">
        
          
        <div class="col-xs-12 prev-next">
      
            <?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' ); ?>
                <a href="<?php bloginfo('url'); ?>#portfolio" data-toggle="tooltip" data-placement="bottom" title="Back to Portfolio Menu"><span class="glyphicon glyphicon-th"></span></a>
            <?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' ); ?>
      
        </div>

                 
    </div>
     

  <div class="container content">
    <div class="row">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        

        <div class="col-sm-12">

          <?php the_content(); ?>

        </div>
            

      <?php endwhile; else: ?>
        
        <div class="page-header">
          <h1>Oh no!</h1>
        </div>

        <p>No content is appearing for this page!</p>

      <?php endif; ?>

      

    </div>

<?php get_footer(); ?>