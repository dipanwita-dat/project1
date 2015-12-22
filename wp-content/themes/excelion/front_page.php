
<?php
/**
 *Template Name: Fornt Page
 */

get_header(); ?>
 <?php $args = array(
  'posts_per_page'   => 5,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'banner',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);
$posts_array = get_posts( $args ); 
if(count($posts_array))
{?>
<div id="banner" class="flexslider">

        <ul class="slides">
             <?php
                   foreach($posts_array as $s){
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($s->ID) );
                    ?>
          <li>
            <img src="<?php echo $feat_image;?>" />
            <div class="caption">
              <div class="wrapper">
                <?php
                                echo $s->post_content;
                                ?>
              </div>
            </div>
          </li>
          <?php }?>
     <!--      <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg" />
            <div class="caption">
              <div class="wrapper">
                <p>“Our firm policy is that if an investment does not meet <br>
                  the personal standards we keep for our own investments <br>
                  it is equally unsuitable for our investors.“
                  <span>- Daniel Zimmer – Vice President Excelion</span></p>
                </div>
              </div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg" />
              <div class="caption">
                <div class="wrapper">
                  <p>“We are dedicated to seeking, recognizing and <br>
                    building low risk, high return investment opportunities <br>
                    in the international Real Estate market.”
                    <span>- Motti Gruzman – CEO Excelion</span></p>
                  </div>
                </div>
              </li> -->
            </ul>
          </div>
                <?php
        }?>
          <div id="main" class="site-main">
            <div id="primary" class="content-area">
              <div id="content" class="site-content">
                <div class="info">
                  <h1>welcome to <span>EXCELION</span></h1>
                  <p>Ours is a story of blending years of experience in international real estate development.
                  <br>Excelling in all we do by combining Vision &amp; Creativity.</p>
                  <p>We’re real estate developers of commercial, residential, retail hospitality and mixed-use properties operating primarily in Europe.</p>
                  <p>Since its founding Excelion Development company has experienced outstanding growth with a portfolio that <br>
                  currently exceeds 80 Million Euros.</p>
                  <a href="javascript:void(0)" class="button">LEARN MORE</a>
                </div>
              </div>
            </div>
          </div>
      
          <?php get_footer(); ?>

           
