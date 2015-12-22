<?php
/**
 * Template Name: executive team page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php
add_action('wp_network_dashboard_setup', function() {
    add_screen_option('layout_columns', ['default' => 2]);
});
?>
          <div id="main" class="site-main white-bg">
            <div id="primary" class="content-area">
              <div id="content" class="site-content">
                 <?php while ( have_posts() ) : the_post();?>   
                <div class="info">
                     <h2 class="title">Executive Team</h2>
                  <?php the_content();?>
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
  'post_type'        => 'excecutive',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);
$posts_array = get_posts( $args ); 
if(count($posts_array))
{

                   foreach($posts_array as $s){

                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($s->ID) );
                    ?>

      <div class="team-l first">
              <div class="img"><img alt="" src="<?php echo $feat_image;?>"></div>
                <div class="right-cont">
                  <h2 class="name"><?php echo $s->post_title;?></h2>
  <?php $content=$s->post_content;
 // echo wp_trim_words( $content, 40, '...' );
 echo substr($content, 0, 200);
  ?>
<a class="readmore" href="<?php echo get_permalink($s->ID);?>">Read More...</a>
                </div>
            </div>
            <?php }}?>
             </div>
              <?php endwhile;?>
              </div>
            </div>
          </div>

<?php
get_footer();