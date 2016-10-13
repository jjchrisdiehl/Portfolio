<?php get_header(); ?>

<div class="container-fluid">   
  <div class="row">
    <div class="col-xs-12">
    <div id="home-wrapper">
        <div class="page-header">
          <h1><?php bloginfo('name'); ?></h1> <h3><?php bloginfo('description'); ?></h3>

          <ul class="categories">
            <?php wp_list_categories( array(
              'title_li' => "",
              'orderby'    => 'name',
              'show_count' => true
              ) ); ?> 
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div clas="col-xs-12">
        <?php if (have_posts()) : ?>


          <?php
         $c = 0; // set up a counter so we know which post we're currently showing
         $extra_class = 'even' // set up a variable to hold an extra CSS class
         ?>
         <?php while (have_posts()) : the_post(); ?>
           <?php
         $c++; // increment the counter
         if( $c % 2 != 0) {
    // we're on an odd post
           $extra_class = 'odd';
         } else {
           $extra_class = 'even'; }
           ?>

           <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
           <article id="post" <?php post_class($extra_class) ?> style="background-image: url('<?php echo $thumb['0'];?>')">

            <section class="screen">
              <h2><a src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><em>
                By <?php the_author(); ?> 
                on <?php echo the_time('l, F jS, Y');?>
                in <?php the_category( ', ' ); ?>.
                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
              </em></p>

              <?php the_excerpt(); ?>
            </section>
            <hr>

          </article>


        <?php endwhile; else: ?>

        <div class="page-header">
          <h1>Oh no!</h1>
        </div>

        <p>No content is appearing for this page!</p>

      <?php endif; ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>