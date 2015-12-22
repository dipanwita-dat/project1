<?php
/**
 * Template Name: contact us page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main" class="site-main white-bg">
            <div id="primary" class="content-area">
              <div id="content" class="site-content">
                <?php while ( have_posts() ) : the_post();?>
                <div class="info">
                  <h2 class="title"><?php the_title(); ?></h2>
                  <div class="map-block"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/map.gif"></div>
                 
                    <?php the_content(); ?>
                
                <!--    <div class="contact-block-r">
                    <h3 class="subtitle">Give us a Message</h3>
                    <ul>
                        <li>
                            <label>Name</label>
                            <input type="text" name="" value="">
                        </li>
                        <li>
                            <label>Phone</label>
                            <input type="text" name="" value="">
                        </li>
                        <li>
                            <label>Email</label>
                            <input type="text" name="" value="">
                        </li>
                        <li>
                            <label>Message</label>
                            <textarea></textarea>
                        </li>
                        <li>
                            <input type="submit" name="" value="submit">
                        </li>
                    </ul>
                  </div>  -->
                </div>
            <?php endwhile ?>
              </div>
            </div>
          </div>
           <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
        <script>
        jQuery(document).ready(function($) {
        $('.flexslider').flexslider({
        animation: "slide"
        });
        });
        </script>
<?php
get_footer();
