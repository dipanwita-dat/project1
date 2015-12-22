<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

 <footer role="contentinfo" class="site-footer" id="colophon">
            <div class="site-info">
              <img class="logo-sml" src="<?php echo get_template_directory_uri(); ?>/images/logo-sml.png" alt="">
              <div class="address">
                     <?php

            $defaults = array(
            'theme_location'  => 'footer',
            'menu'            => 'bottom menu',
            'container'       => div,
            'container_class' =>false,
            'container_id'    => false,
            'menu_class'      => false,
            'menu_id'         => false,
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
                <!-- <ul>
                  <li><a href="javascript:void(0)">Home</a></li>
                  <li><a href="javascript:void(0)">About us</a></li>
                  <li><a href="javascript:void(0)">Investment Strategy</a></li>
                  <li><a href="javascript:void(0)">Activity</a></li>
                  <li><a href="javascript:void(0)">Why Invest</a></li>
                  <li><a href="javascript:void(0)">Portfolio</a></li>
                  <li><a href="javascript:void(0)">Execetive Team</a></li>
                  <li><a href="javascript:void(0)">Contact</a></li>
                </ul> -->
                <div class="clearfix"></div>
                <p>Copyright &copy; 2015 Excelion. All Rights Reserved.</p>
              </div>
              <div class="clearfix"></div>
            </div>
          </footer>
        </div>
        
	<?php wp_footer(); ?>
</body>
</html>