<?php get_header(); ?>
<div class="container-fluid">
   <div class="row">
      <!--FEATURED IMAGE-->
      <div class="col-md-12">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
            if ($post_image_id) {
            $thumbnail = wp_get_attachment_image_src( $post_image_id, 'homepage-thumbnail', false);
            if ($thumbnail) (string)$thumbnail = $thumbnail[0];
            }?>
         <div class="featured-post-image full-image" style="background: url(<?php echo $thumbnail; ?>); background-size: cover; background-position:top left;"></div>
      </div>
   </div>
   <!--END FEATURED IMAGE-->
   <div class="left-flex-rectangle"></div>
   <div class="right-flex-rectangle"></div>
   <!--TITLE DIV-->
   <div class="row">
      <div class="col-md-12">
         <div id="title-wrapper" style="text-align: center"> 
            <h1 class="title"><?php the_title(); ?></h1>
         </div>
      </div>
   </div>
</div>
<div class="container module">
   <div class="row">
      <div class="col-md-12 single-page-body">
         <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?>
      <div class="page-header">
         <h1>Oh no!</h1>
      </div>
      <p>No content is appearing for this page!</p>
      <?php endif; ?>
   </div>
   <!--end column-->   
</div>
<!--end row-->
</div>  <!--end container -->
<?php get_footer(); ?>