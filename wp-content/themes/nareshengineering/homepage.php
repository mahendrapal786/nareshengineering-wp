<?php
/*
Template Name: Home Page
*/
get_header();
global $post;
?>
<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <?php if(have_rows('top_slider',$post->ID)) { ?>
  <div class="companies20-content">
    
    <div class="owl-one owl-carousel owl-theme">

<?php
$slider_num=1;
while(have_rows('top_slider',$post->ID)) 
{ 
the_row();
$title = get_sub_field('title');
$description = get_sub_field('description');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$image = get_sub_field('image');
      
echo '<div class="item">';
echo '<li>';
echo '<div class="slider-info  banner-view banner-top'.$slider_num.' bg bg2" data-selector=".bg.bg2" style="background: url('.$image.') no-repeat center;">';
echo '<div class="banner-info">';
echo '<div class="container">';
echo '<div class="banner-info-bg mr-auto">';
echo '<h5>'.$title.'</h5>';
echo '<p>'.$description.'</p>';
echo '<a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="'.$button_link .'">'.$button_text.'</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '</div>';

$slider_num++;
}

       ?>
      
    </div>
  </div>
<?php } ?>




  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>
<section class="w3l-features-1">
  <!-- /features -->
    <div class="features py-5">
            <div class="container">
      
      <div class="fea-gd-vv row ">  
         <div class="col-lg-3 col-sm-6">  
        <div class="float-lt feature-gd"> 
           <div class="icon"> <span class="fa fa-microchip" aria-hidden="true"></span></div>
           <div class="icon-info">
            <h5>Best engineering</h5>
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur </p>
          </div>
        </div>
        </div>  
        <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">  
          <div class="float-mid feature-gd">  
           <div class="icon"> <span class="fa fa-flask" aria-hidden="true"></span></div>
           <div class="icon-info">
            <h5>Chemical research</h5>
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur </p>
          </div>
        </div>
       </div> 
        <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">  
          <div class="float-rt feature-gd">
           <div class="icon"> <span class="fa fa-fire" aria-hidden="true"></span></div>
           <div class="icon-info">
            <h5>Rapid delivery</h5>
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur </p>
          </div>
        </div>
       </div>  
       <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4"> 
        <div class="float-lt feature-gd"> 
           <div class="icon"> <span class="fa fa-cog" aria-hidden="true"></span></div>
           <div class="icon-info">
            <h5>Call center</h5>
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur </p>
          </div>
        </div>  
      </div>  
    </div>  
     </div>
     </div>
   <!-- //features -->
</section>
 <!--  About section -->

<?php 
$home_about_title=get_field( 'home_about_title', $post->ID );
$home_about_description=get_field('home_about_description', $post->ID); 
$home_about_image=get_field('home_about_image', $post->ID); ?>
 <div class="w3l-about1 py-5" id="about">
  <div class="container py-lg-3">
   
    <div class="aboutgrids row">
      <div class="col-lg-6 aboutgrid2">
        <img src="<?php echo $home_about_image; ?>" alt="about image" class="img-fluid" />
      </div>
      <div class="col-lg-6 aboutgrid1 mt-lg-0 mt-4 pl-lg-5">
        <h4><?php echo $home_about_title; ?></h4>
        <?php echo $home_about_description; ?>
        <a class="btn btn-secondary btn-theme2" href="<?php echo get_permalink('19'); ?>"> About Us</a>
      </div>
    </div>
  </div>
</div>
 ?>
 <!--  //About section -->
<section class="w3l-services2" id="stats">
      <div class="features-with-17_sur py-5">
           <div class="container py-md-3">
          
             <div class="row pt-lg-5 mt-lg-3">
            <div class="col-lg-4 features-with-17-left_sur">
              <h4 class="lft-head">We're thriving and building better products</h4>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.</p>
            </div>
            <div class="col-lg-8 my-lg-0 my-5 align-self-center features-with-17-right_sur">
              <div class="features-with-17-right-tp_sur text-center">
                <div class="features-with-17-left1">
                  <span class="fa fa-user s4"></span>   
                </div>
                <div class="features-with-17-left2">
                  <h6>1100</h6>
                  <p>HAPPY CLIENT</p>   
                </div>
              </div>
              <div class="features-with-17-right-tp_sur text-center">
                <div class="features-with-17-left1">
                    <span class="fa fa-handshake-o s5"></span>    
                </div>
                <div class="features-with-17-left2">
                    <h6>1208</h6>
                    <p>WORKERS HAND</p>     
                </div>
              </div>
              <div class="features-with-17-right-tp_sur text-center">
                <div class="features-with-17-left1">
                  <span class="fa fa-lock s3"></span>   
                </div>
                <div class="features-with-17-left2">
                    <h6>1250</h6>
                    <p>ACTIVE EXPERTS</p> 
                </div>
              </div>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </section>
   <?php
    $cat_args= array(
                    'post_type' => 'product',
                    'order' => 'DESC',
                    'orderby' => 'post_date',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                 'tax_query' => array(
                      array(
                          'taxonomy' => 'product_cat',
                          'field' => 'term_id',
                          'terms'    => 17
                      ),
                    ),
                  ); 
    $product_query = new WP_Query( $cat_args );    
    $total_pages=$product_query->max_num_pages;
   $total_posts=$product_query->found_posts;
   if ( $product_query->have_posts() ) :  
   ?>
<section class="w3l-features-8">
   <!-- /features -->
   <div class="features py-5" id="features">
      <div class="container py-md-3">
         <div class="heading text-center mx-auto">
            <h3 class="head">Industries Served</h3>
            <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.
            </p>
         </div>
         <div class="fea-gd-vv text-center row mt-5 pt-3">
<?php foreach($product_query->posts as $products) { 
$productid=$products->ID;
$productName=get_the_title($productid);
$productURL=get_the_permalink( $productid );
$short_des = apply_filters('the_excerpt', get_post_field('post_excerpt', $productid));
$src = wp_get_attachment_image_src( get_post_thumbnail_id($productid), 'full', false, '' );
echo '<div class="col-lg-4 col-md-6">';
echo '<div class="float-top">';
echo '<a href=""><img src="'.$src[0].'" class="img-responsive" alt="'.$productName.'"></a>';
echo '<div class="float-lt feature-gd">';
echo '<h3><a href="'.$productURL.'">'.$productName.'</a> </h3>';
echo $short_des;
echo '<a class="btn btn-secondary btn-theme4 mt-4" href="'.$productURL.'"> More Details</a>';
echo '</div>';
echo '</div>';
echo '</div>';
           } ?> 
         </div>
      </div>
   </div>
   <!-- //features -->
</section>
  <?php endif; ?>
<!-- customers4 block -->
<section class="w3l-customers-4" id="testimonials">
  <div id="customers4-block" class="py-5">
    <div class="container py-md-3">


      <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
          <li data-target="#customerhnyCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner pb-5 mb-md-5 pt-md-5">

          <div class="carousel-item active">
            <div class="section-title">
              <div class="item-top">
                <div class="item text-center">
                  <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c1.jpg" class="img-responsive" alt="" />
                  </div>
                  <h6 class="mt-3">Steve Smith</h6>
                  <p class="">Client</p>
                  <h5>" Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor " </h5>

                </div>
              </div>
            </div>
          </div>
          <!--.item-->

          <div class="carousel-item">
            <div class="section-title">
              <div class="item-top">
                <div class="item text-center">
                  <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c2.jpg" class="img-responsive" alt="" />
                  </div>
                  <h6 class="mt-3">Jessey Rider</h6>
                  <p class="">Worker</p>
                  <h5>" Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor " </h5>

                </div>
              </div>
            </div>

          </div>
          <!--.item-->
          <div class="carousel-item">
            <div class="section-title">
              <div class="item-top">
                <div class="item text-center">
                  <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c3.jpg" class="img-responsive" alt="" />
                  </div>
                  <h6 class="mt-3">Mark Stoins</h6>
                  <p class="">Engineer</p>
                  <h5>" Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor " </h5>

                </div>
              </div>
            </div>
          </div>
          <!--.item-->

        </div>
        <!--.carousel-inner-->
      </div>




    </div>
  </div>


</section>
<!-- homepage blog grids -->
<?php
$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC' );
$posts = new WP_Query( $args ); 
if ( $posts->have_posts() ) : 
?>
<section class="news-1" id="blog">
<div class="news py-5">
    <div class="container py-md-3">
        <div class="heading text-center mx-auto">
            <h3 class="head">Latest News & Events</h3>
            <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
         </div>
        <div class="blog-grids row mt-5">
          <?php foreach($posts->posts as $blogposts) { 
$post_id=$blogposts->ID;
$postName=get_the_title($post_id);
$postURL=get_the_permalink( $post_id );
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full', false, '' );      
$postdate=$blogposts->post_date;
$postdate = date("F d, Y", strtotime($postdate));

echo '<div class="col-lg-4 col-md-6 col-sm-12">';
echo '<div class="blog-grid" id="zoomIn">';
if(!empty($src))
{
echo '<a href="'.$postURL.'">';
echo '<figure>';
echo '<img src="'.$src[0].'" class="img-fluid" alt="'.$postName.'">';
echo '</figure>';
echo '</a>';
}
echo '<div class="blog-info">';
echo '<h3><a href="'.$postURL.'">'.$postName.'</a> </h3>';
echo '<p>'.wp_trim_words( $blogposts->post_content, 20, '...' ).'</p>';
echo '<ul>';
echo '<li><a href="javascript:void(0);"><span class="fa fa-user-o mr-2"></span>Prem</a></li>';
echo '<li><a href="javascript:void(0);"><span class="fa fa-calendar mr-2"></span>'.$postdate.'</a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</div>';
           } ?>
            
        </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- //homepage blog grids -->
<?php get_footer(); ?>