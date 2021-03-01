<?php
/*
Template Name: Gallery Page
*/
get_header();
global $post;
?>>
<section class="w3l-service-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="<?php echo site_url('/') ?>">Home</a> &nbsp; / &nbsp; Gallery</p>
      <h2 class="my-3">Our Gallery</h2>
    </div>
  </div>
</section>
 <!--  Work gallery section -->
 <?php
 if(have_rows('gallery',$post->ID)) {
?> 
 <div class="w3l-gallery2" id="gallery">
  <div class="insta-picks py-5">
    <div class="container py-md-3">
     
      <div class="row no-gutters masonry">
        <?php  
            while(have_rows('gallery',$post->ID)) 
            { 
            the_row();
            $image = get_sub_field('image');
            $title = get_sub_field('title');  ?>
         <div class="col-md-4 col-sm-6 brick">
          <a href="<?php echo $image; ?>" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design" data-id="lion">
            <img src="<?php echo $image; ?>" class="img-fluid insta-pic" alt="<?php echo $title; ?>" />
            <div class="content-overlay"></div>
            <div class="content-details fadeIn-top">
              <h4><?php echo $title; ?></h4>
            </div>
          </a>
        </div>
     <?php } ?>
        
        
      </div>
     
    </div>
  </div>
</div>
<?php } ?>

<?php get_footer(); ?>