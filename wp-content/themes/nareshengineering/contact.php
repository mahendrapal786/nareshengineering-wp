<?php
/*
Template Name: Contact Page
*/
get_header();
global $post;
?>>
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="<?php echo site_url('/') ?>">Home</a> &nbsp; / &nbsp; Contact</p>
      <h2 class="my-3">Contact Us</h2>
      <p>Nulla dolorem perferendis inventore! posuere cubilia Curae; Nunc non risus in justo convallis feugiat. consectetur adipisicing elit.</p>
    </div>
  </div>
</section>
<!-- contact form -->
<section class="w3l-contacts-2" id="contact">
  <div class="contacts-main">
    <div class="contant11-top-bg py-5">
      <div class="container py-md-3">
        <div class="d-grid contact section-gap">
          <div class="contact-info-left d-grid text-center">
            <div class="contact-info">
              <span class="fa fa-map-marker" aria-hidden="true"></span>
              <h4>Address</h4>
              <p><?php dynamic_sidebar('contact_address'); ?></p>
            </div>
            <div class="contact-info">
              <span class="fa fa-mobile" aria-hidden="true"></span>
              <h4>Phone</h4>
              <p><a href="tel:<?php echo RemovePhoneHyphen(); ?>">+91 <?php echo get_theme_mod( 'phone_text_block'); ?></a></p>
              
            </div>
            <div class="contact-info">
              <span class="fa fa-envelope-o" aria-hidden="true"></span>
              <h4>Mail</h4>
              <p><a href="mailto:<?php echo get_theme_mod( 'email_text_block'); ?>" class="email"><?php echo get_theme_mod( 'email_text_block'); ?></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-41-mian pb-5">
      <div class="container pb-md-3">
        
        <div class="d-grid align-form-map">
          <div class="form-inner-cont">
            <h3 class="cont-head">Send Message Us</h3>
            <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="main-input">
              <div class="top-inputs d-grid">
                <input type="text" placeholder="Name" name="w3lName" id="w3lName" required="">
                <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
              </div>
              <input type="text" placeholder="Phone Number" name="w3lName" id="w3lName" required="">
              <textarea placeholder="Message" name="w3lMessage" id="w3lMessage" required=""></textarea>
              <div class="text-right">
                <button type="submit" class="btn btn-theme3">Send Now</button>
              </div>
            </form>
          </div>
          
          <div class="contact-right">
          
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281066703!2d-0.24168144921176335!3d51.5287718408761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1569921526194!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          
          </div>
        </div>
      </div>
    </div>
    
    
</section>
<!-- //contact form -->

<?php get_footer(); ?>