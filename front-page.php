<?php get_header(); ?>

<div class="container-fluid">
<div class="fullscreen-bg">
  <video preload muted autoplay loop class="fullscreen-bg__video">
    <source src="<?php bloginfo('template_directory');?>/video/video_reel.mp4" type="video/mp4">
    </video>
</div>
    <div class="jumbotron sixteen-nine front">

      <div class="row content">
        <div class="container">
        <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

          <?php endwhile; endif; ?>

          <img class="jumbo-image" src="http://chrisdiehldemos.com/wp-content/uploads/2016/09/wp_badge.png" width="500px" height="500px" />
        </div>
        </div>
      </div>


    </div><!-- END OF JUMBOTRON -->


<?php

$args = array(
  'post_type'     => 'post',
  'category_name' => 'hero'
  );
$the_query = new WP_Query( $args );

?>
<!--
    <div class="top-buffer">
    </div>-->

    <!--    FEATURETTE ONE    -->
    <div class="heroes wrapper">
      <div class="row">
        <div class="container">
        <div class="row module">
          <div id="heroes" class="featurette">
            <div class="col-xs-12 col-sm-7">
              <h2 class="featurette-heading">Show up in search results. <span class="text-muted">It'll blow your mind.</span></h2>
              <p class="lead">Understand what really drives your online conversions. Hard, honest work can create truly great content that will impress not just your audience...but the search engines that drive your traffic! With these helpful suggestions you can finally take control of your online presence.</p>


            </div>
            <div style="text-align: center" class="col-xs-12 col-sm-5">
              <i class="fa fa-search feature-size grow" aria-hidden="true"></i>

              <a href="<?php $url = get_bloginfo(); ?>/search-engines/" type="button" class="btn btn-warning btn-lg ">How do Search Engines work?</a>
            </div>


          </div>


          <hr class="featurette-divider">


          <!--    FEATURETTE TWO    -->
          <div class="row featurette">
            <div class="col-xs-12 col-sm-7 col-sm-push-5">
              <h2 class="featurette-heading">Is your website <em>responsive</em>? <span class="text-muted"><a href="https://www.google.com/webmasters/tools/mobile-friendly/">See for yourself.</a></span></h2>
              <p class="lead">Responsive design can place you ahead of your competition. Your website mobile ranking and visibility relies on "responsive design". Search engines <a href="https://developers.google.com/webmasters/mobile-sites/">like Google now show preference to responsive websites</a>...the only question... Is yours?</p>       
            </div>
            <div style="text-align: center" class="col-xs-12 col-sm-5 col-sm-pull-7">
             <i class="fa fa-cog fa-spin feature-size" aria-hidden="true"></i>

             <a href="<?php $url = get_bloginfo(); ?>/responsive-design/" type="button" class="btn btn-danger btn-lg .btn-inverse">Learn about Responsive Design</a>

           </div>


         </div>

         <hr class="featurette-divider">

         <!--    FEATURETTE THREE    -->
         <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Time to take control. <br> <span class="text-muted">Ready?</span></h2>
            <p class="lead">The future of your online presence is in your hands. By following these basic steps we can create great content, flexible design, and machine readable code. With proper consideration and design your business will be accessible across all platforms, for all audiences.</p>
          </div>
          <div style="text-align: center" class="col-md-5">
            <i class="fa fa-clock-o feature-size" aria-hidden="true"></i>

            <a href="<?php $url = get_bloginfo(); ?>/marketing-tips/"><button class="btn btn-success btn-lg get-started .btn-inverse">Get started now</button></a>
          </div>

        </div>
        </div><!--END ROW-->
      </div> <!-- CONTAINER END -->
    </div><!--ROW FEATURETTE-->
  </div><!--END HEROES-->
    </div><!--END OF CONTAINER -->

  <?php get_footer(); ?>