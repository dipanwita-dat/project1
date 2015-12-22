<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
  
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
        <script>
    var jq= jQuery.noConflict();
      jq(document).ready(function($) {
    jq('.flexslider').flexslider({
        animation: "slide"
        });
        });
        </script>
</head>
<body <?php body_class( $class ); ?>>
    <div id="page" class="hfeed site">
      <header role="banner" class="site-header" id="masthead">
        <div class="wrapper">
          <a rel="home" title="Excelion :: Excel, Create, Vision" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-link">
         <?php echo do_shortcode('[site_logo]'); ?>  
          </a>
          <div class="navbar" id="navbar">
            <nav role="navigation" class="navigation main-navigation" id="site-navigation">
              <h3 class="menu-toggle">Menu</h3>
              <div class="menu-main-nav-container">
                <?php

            $defaults = array(
            'theme_location'  => 'primary',
            'menu'            => 'top menu',
            'container'       => false,
            'container_class' => false,
            'container_id'    => false,
            'menu_class'      => 'nav-menu',
            'menu_id'         => 'menu-main-nav',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
          );

          wp_nav_menu( $defaults );

          ?>  
               
              </div>
            </nav>
          </div>
          <div class="clearfix"></div>
        </div>
      </header>

    </div>
     