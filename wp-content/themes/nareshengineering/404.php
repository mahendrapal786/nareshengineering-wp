<?php 
/*
this  is 404 page template
*/
get_header();
?>
<main class="main" role="main">
    <section class="section-content section-nodata  bg-white" data-aos="fade-in" data-aos-offset="0" data-aos-duration="600">
        <div class="container">
          <div class="content-panel mw-900 m-auto">
              <div class="content-body">
                <div class="nodata" data-aos="fade-in" data-aos-duration="500" data-aos-easing="ease-in-sine">
                    <div class="nodata_body">
                        <figure class="nodata_figure mb-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404-error.png" alt="404-error" class="img-fluid">
                        </figure>
                        <h1 class="nodata_title nodata_title_bg h2">OH! PAGE NOT FOUND.</h1>
                        <p class="nodata_text">Maybe you landed on the wrong page. Let's take you to Naresh Engineering Homepage</p>
                    </div>
                    <div class="nodata_footer">
                        <a class="btn primary-gradient" href="<?php echo esc_url( home_url( '/' ) ); ?>">Go to HomePage</a>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </section>
  </main>
<?php get_footer(); ?>