<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();
 ?>


          <div id="main" class="site-main white-bg">
            <div id="primary" class="content-area">
              <div id="content" class="site-content">
              <?php while ( have_posts() ) : the_post(); 
               	 $feat_image = wp_get_attachment_url( get_post_thumbnail_id() );?>       
                <div class="info">
            <div class="team-detail">

            	<div class="img" ><img alt="" src="<?php echo $feat_image;?>" width="248" height="280"></div>
                <div class="right-cont">
                	<h2 class="name"><?php the_title();?></h2>
                	 <?php $c=the_content();
                	 
                	 ?>
<!--                 	
                    <p class="designation">Executive Relation Manager</p>
<ul>
	<li>Wealth management</li>
    <li>Client relations</li>
    <li>Networking</li>
</ul>
<p class="content">Mr. Laufer joined our team in 2015, he oversees the commercial components of the Company’s mixed-use portfolio. Prior to joining Excelion, Andre served as Retail Development officer , where he had responsibility for the development of the company’s lifestyle 
centers and led the retail development and leasing efforts on urban mixed-use projects. </p> -->
                </div>
            </div>
             </div>
               <?php endwhile; ?>
              </div>
            
            </div>
          </div>

<?php get_footer(); ?>