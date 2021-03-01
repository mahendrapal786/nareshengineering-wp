<?php
/**
 * The template for displaying all single posts.
 *
 * @package Boos Buildings
 */
get_header();
global $post;
$post_id = $post->ID;
setPostViews($post_id);
$postTitle=get_the_title($post_id);

$postdate = get_the_time('Y-m-d', $post_id);
$postdate = date("d F Y", strtotime($postdate));
$author_id = get_post_field( 'post_author', $post_id );

$short_content=get_field( 'short_content', $post->ID );
$block_quote_text=get_field( 'block_quote_text', $post->ID );

?>
  <main class="main" role="main">
    <section class="section-content section-page-header triangle-pattern" data-aos="fade-in" data-aos-offset="0" data-aos-duration="600">
      <div class="container">
        <div class="content-panel">
          <div class="content-heading">          
            <nav class="nav-breadcrumb" data-aos="fade-in-up">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <span class="icon">
                                <svg class="svg-icons" width="16px" height="16px">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#homeIcon"></use>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo get_permalink('30'); ?>">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $postTitle; ?></li>
                </ol>
            </nav>      
            <h1 class="content-title h2" data-aos="fade-in-up" data-aos-delay="100"><?php echo $postTitle; ?></h1>          
          </div>  
        </div>
      </div>
    </section>  
    <section class="section-content section-blog-single bg-white" data-aos="fade-in" data-aos-offset="0" data-aos-duration="600">
      <div class="container">
        <div class="content-panel">
          <div class="row">
            <div class="col-xl-8 col-lg-7">
              <div class="content-body">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="section-editor" data-aos="fade-in-up">
                      <div class="section-body editor-firstletter">
                          <p><?php echo $short_content; ?></p>                          
                          <ul class="list-posted justify-content-start">
                              <li class="item">
                              <span class="icon"><svg class="svg-icons" width="14px" height="14px">
                                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#calendarIcon"></use>
                                  </svg></span>
                              <span class="text"><?php echo $postdate; ?></span>
                              </li>
                              <li class="item"><span class="text">Posted By <?php echo get_the_author_meta( 'display_name', $author_id ); ?></span></li>
                          </ul>
                         
                          <?php
                          if (has_post_thumbnail( $post_id ) ):
                          echo '<img src="'.wp_get_attachment_url( get_post_thumbnail_id($post_id) ).'" alt="'.get_the_title($post_id).'" style="background-color:#d8f1f6;">';
                          endif; 
                          ?>


                      </div>  
                      <div class="media media-default align-items-center">
                          <div class="media-left">
                          <span class="media-icon circle wh-84">
                              <svg class="svg-icons" width="34px" height="34px" >
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#quoteIcon"></use>
                              </svg>
                          </span>
                          </div>
                          <?php
                          if(!empty($block_quote_text))
                          {
                            echo '<div class="media-body">';
                            echo '<p class="media-lead">'.$block_quote_text.'</p>';
                            echo '</div>';
                          }
                          ?>
                      </div>
                      <div class="section-body editor-imgtext">
                           <?php the_content(); ?>
                      </div>
                    </div>
                   <?php  endwhile; endif; ?>

                </div>
            </div>
            <div class="col-xl-4 col-lg-5 sidebar" data-aos="fade-in-up">
              <?php get_sidebar('blog'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>    
     <?php include(TEMPLATEPATH."/inc/info.php"); ?>
  </main>
<?php get_footer(); ?>  