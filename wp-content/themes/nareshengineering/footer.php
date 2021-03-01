<!-- grids block 5 -->
 <section class="w3l-footer-29-main" id="footer">
  <div class="footer-29">

      <div class="container pt-5">
        
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">About Us</h6>
                  <ul>
                     <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                  </ul>
                  <div class="main-social-footer-29">
                    <h6 class="footer-title-29">Social Links</h6>
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Useful Links</h6>
                      <li><a href="<?php echo site_url('privacy-policy') ?>">Privacy Policy</a></li>
                      <li><a href="<?php echo site_url('term-of-use') ?>">Term Of Use</a></li>
                  </ul>
              </div>
              <?php 
              $recent_product_args= array(
                    'post_type' => 'product',
                    'order' => 'DESC',
                    'orderby' => 'post_date',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                 'tax_query' => array(
                      array(
                          'taxonomy' => 'product_cat',
                          'field' => 'term_id',
                          'terms'    => 17
                      ),
                    ),
                  );
              $product_query = new WP_Query( $recent_product_args );    
            $total_pages=$product_query->max_num_pages;
           $total_posts=$product_query->found_posts;
           if ( $product_query->have_posts() ) :
                  ?>
              <div class="footer-list-29 footer-3">
                  <div class="properties">
                      <h6 class="footer-title-29">Recent Projects</h6>
                      <?php foreach($product_query->posts as $products) { 
                  $productid=$products->ID;
                  $productName=get_the_title($productid);
                  $productURL=get_the_permalink( $productid ); 
                  $src = wp_get_attachment_image_src( get_post_thumbnail_id($productid), 'full', false, '' );   
                  echo '<a href="'.$productURL.'">';
                  echo '<img src="'.$src[0].'" class="img-responsive" alt="'.$productName.'">';
                  echo '<p>'.$productName.'</p>';
                  echo '</a>';
                    } ?>
                  </div>
              </div>
               <?php endif; ?> 
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      <li><a href="<?php echo site_url('about-us') ?>">About</a></li>
                      <li><a href="<?php echo site_url('services') ?>">Services</a></li>
                      <li><a href="<?php echo site_url('gallery') ?>">Gallery</a></li>
                      <li><a href="<?php echo site_url('blog') ?>">Blog</a></li>
                      <li><a href="<?php echo site_url('contact-us') ?>">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="bottom-copies text-center">
               <p class="copy-footer-29">© 2021 Naresh Engineering & Fabrications. All rights reserved</p>
          </div>
      </div>
  </div>
   <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
              <span class="fa fa-angle-up"></span>
                 </button>
                 <script>
                     window.onscroll = function () {
                         scrollFunction()
                     };
              
                     function scrollFunction() {
                         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                             document.getElementById("movetop").style.display = "block";
                         } else {
                             document.getElementById("movetop").style.display = "none";
                         }
                     }
              
                     function topFunction() {
                         document.body.scrollTop = 0;
                         document.documentElement.scrollTop = 0;
                     }
                 </script>
</section>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
</section>
<script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js" crossorigin="anonymous"></script>

<!-- Smooth scrolling -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/smartphoto.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sm = new SmartPhoto(".js-img-viwer", {
      showAnimation: false
    });
   
  });
</script>
 <?php wp_footer(); ?>
</body>
</html>