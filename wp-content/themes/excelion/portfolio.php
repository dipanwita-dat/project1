<?php
/**
 * Template Name: Portfolio
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
 <?php $args = array(
  'posts_per_page'   => 12,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'date',
  'order'            => 'ASC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'portfolio',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);
$posts_array = get_posts( $args ); 
if(count($posts_array))
{?>
       <div id="main" class="site-main white-bg">
            <div id="primary" class="content-area">
              <div id="content" class="site-content">
                <div class="info">
                     <h2 class="title">portfolio</h2>
                  <ul class="portfolio">

                <?php
                   foreach($posts_array as $s){
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($s->ID) );
                    ?>
                                 <li>
                    	<a href="#"><img alt="" src="<?php echo $feat_image;?>"></a>
                     
                                 <?php
                                echo $s->post_content;
                                ?>
                      
                    </li>
                   
                   <!--  

                    <li>
                    	<a href="#"><img alt="" src="images/portfolio-img12.jpg"></a>
                        <h2><a href="#">Russia,Sochi</a></h2>
                        <p>Development of new condominium 
projects and commercial space.</p>
                    </li> -->
                     <?php }?>
                  </ul>
                  
                  
                </div>
                   
                  
              </div>
            </div>
          </div>
          <?php }?>

<?php
get_footer();