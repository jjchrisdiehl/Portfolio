<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.png">
<!-- <link href='https://fonts.googleapis.com/css?family=Poly' rel='stylesheet' type='text/css'>-->
    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

<style type="text/css">
  /*---[NAVBAR]---*/
/*======================================*/
.admin-bar .navbar-fixed-top {
  margin-top: 30px;
}
.navbar-inverse .navbar-brand,
.navbar-inverse .navbar-brand:hover{
  color: $nav-hover;
  font-weight: 600;
  font-family: $stack-lato;
}

.navbar-inverse{
  background-image: none;
  background-color: $nav;
  border-color: $nav;
  position: fixed;
  z-index: 2;
}
div.navbar.navbar-inverse.navbar-fixed-top > div > div.navbar-header > button > span.icon-bar{
  background-color: $orange;
}
.navbar-inverse .navbar-toggle:focus,
.navbar-inverse .navbar-toggle:hover{
  background-color: #ffffff;
}

.current-menu-item > a {
    background: $base;
}


@media (min-width:768px) {
  .sub-menu {
    display: none;
    position: absolute;
    background: #222;
    padding: 10px 15px;
    width: 200px;   
  }

  li:hover .sub-menu {
    display: block;
  }

}

.sub-menu li {
  margin-bottom: 10px;
  list-style: none;
}

.sub-menu li:last-child {
  margin-bottom: 0;
}

.sub-menu a  {
  color: #999;
  text-decoration: none;
}

.sub-menu a:hover  {
  color: $base; 
} 

.current-menu-item > a, .current-menu-parent > a {
  background: #000; 
}
.current-menu-parent li a {
  background: inherit;
}
.current-menu-parent .current-menu-item a {
  color: #fff;
  font-weight: bold;
}

@media screen and(max-width: 768px){
  .admin-bar .navbar-fixed-top {
  margin-top: 45px;
  position: fixed;
}
}
</style>
  </head>

  <body <?php body_class('preload'); ?>>
  <div id="wrapper"><!-- /BEGIN WRAPPER -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>

        <div class="navbar-collapse collapse">

          <?php 
            $args = array(
              'menu'        => 'header-menu',
              'menu_class'  => 'nav navbar-nav',
              'container'   => 'false'
            );
            wp_nav_menu( $args );
          ?>

        </div><!--/.navbar-collapse -->

      </div>
    </div><!--NAVBAR -->
  </div> <!--#WRAPPER END -->
<!--  <div><strong>Current template:</strong> <?php get_current_template( true ); ?></div> -->

<div id="content"><!-- /BEGIN WRAPPER-CONTENT -->