<?php
/**
 * Template Name: About us
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
                    <?php the_title( '<div class="page-title">', '</div>' );?>
                  <div class="ceo-text">
                    <p>We are dedicated to seeking, recognizing and building low risk, high return investment 
opportunities in the international Real Estate market.</p>
<p class="name">Motti Gruzman<br>
<span>CEO Excelion</span></p>
                  </div>
                  <?php the_content();?>
                </div>
                <?php endwhile;?>
              </div>
            </div>
          </div>

<?php
get_footer();
