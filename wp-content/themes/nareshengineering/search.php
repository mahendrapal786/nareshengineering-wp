<?php
/**
* The template for displaying Search Results pages
*
*/
get_header();
$s=get_search_query();
?>
<main class="main" role="main">
        <section class="content-section section-result" data-aos="fade-in" data-aos-offset="0" data-aos-duration="600">          
            <div class="content-panel">  
                <div class="content-body">
                    <div class="container container-xl-sm">
                       <?php if(!empty($s)) { ?>
                      <h1><small>Search Results for:</small> <?php echo $s; ?></h1>
                      <?php } ?> 
                       <div class="form-group form-search">
                          <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" class="input-icon right">
                          <div class="input-icon right">
                          <input type="text" name="s" class="form-control" placeholder="Search Results" value="<?php if (isset($_GET["s"])) { $a = $_GET["s"]; echo $a; }?>">
                          <button class="icon" type="submit"><i class="ficon-search"></i></button>
                          </div>
                        </form> 
                       </div>
                    </div>

                    <?php 
                    global $wpdb;
                    
                    if (isset($_GET['page'])) {
                    $paged = $_GET['page'];
                    } else {
                    $paged = 1;
                    }

                    $post_per_page = 10;
                    $offset = ($paged - 1)*$post_per_page;

                    $search_query = "SELECT p.post_title, p.post_excerpt, p.ID FROM wp_posts p JOIN wp_postmeta m1 ON p.ID = m1.post_id WHERE (p.post_title LIKE '%{$s}%' OR p.post_excerpt LIKE '%{$s}%' OR p.post_content LIKE '%{$s}%') AND p.post_type IN ('product', 'post', 'page', 'locations') AND p.ID NOT IN (395,10,3,2,46,400,398,48,44,50) AND p.post_status = 'publish' GROUP BY p.ID ORDER BY FIELD(post_type, 'product', 'post', 'page', 'locations') ASC, p.post_date DESC";

                   $total_record = count($wpdb->get_results($search_query, ARRAY_A));

                    $max_num_pages  = ceil($total_record/ $post_per_page);
                    $wp_query->found_posts = $total_record;
                    $wp_query->max_num_pages = $max_num_pages;

                    $limit_query    =   " LIMIT ".$post_per_page." OFFSET ".$offset;

                    $pageposts =   $wpdb->get_results($search_query.$limit_query, ARRAY_A);

                    if ($pageposts):
                    ?>
                    <div class="container container-xl-md">
                        <div class="card-group-search">
                           <?php 
                            global $post; 
                            foreach ($pageposts as $post):

                            $post_title=$post['post_title'];
                            $post_excerpt=$post['post_excerpt'];

                            $post_id=$post['ID'];
                            $post_type = get_post_type( $post_id );
                            $price=get_post_meta( $post_id, '_regular_price', true );
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full', false, '' );
                            $post_url=get_permalink($post_id);
                            if($post_type=='product')
                            {
                              echo '<div class="card card-search">'; 
                              echo '<div class="row">'; 
                              
                              echo '<div class="col-sm">'; 
                              echo '<div class="card-body ph-0">'; 
                              echo '<span class="badge badge-yellow">'.ucfirst($post_type).'</span>'; 
                              echo '<h5 class="card-title mb-0"><a href="'.$post_url.'">'.$post_title.'</a></h5>'; 
                              if(!empty($price)) {
                              echo '<span class="price">Starting Price:<strong>$'.$price.'*</strong></span>';
                              }
                              echo '</div>'; 
                              echo '</div>';
                              echo '<div class="col-lg-3 col-md-4 col-sm-5">';
                              
                              echo '<figure class="img-panel">'; 
                              echo '<a class="block" href="'.$post_url.'">'; 
                              echo '<img src="'.get_template_directory_uri(). '/assets/img/blank-3x2.png" class="img-full">';
                              if(!empty($image))
                              {
                              echo '<img src="'.$image[0].'" class="main-img" alt="'.$post_title.'">';
                              }
                              else
                              {
                                echo '<img src="'.get_template_directory_uri().'/assets/img/no-image.jpg'.'" class="main-img" alt="'.$post_title.'">';
                              } 
                              echo '</a>'; 
                              echo '</figure>';
                              echo '</div>'; 
                              echo '</div>';
                              echo '</div>'; 
                              }
                              else
                              {
                              echo '<div class="card card-search">'; 
                              echo '<div class="card-body ph-0">'; 
                              if($post_type=='post')
                                 {
                                    echo '<span class="badge badge-secondary">Blog</span>';
                                 }
                              else if($post_type=='page')
                                 {
                                    echo '<span class="badge badge-primary">'.ucfirst($post_type).'</span>';
                                 }
                              else if($post_type=='locations')
                                 {
                                    echo '<span class="badge badge-green">'.ucfirst($post_type).'</span>';
                                 }
                              echo '<h5 class="card-title mb-0"><a href="'.$post_url.'">'.$post_title.'</a></h5>';
                              echo $post_excerpt; 
                              echo '</div>'; 
                              echo '</div>';
                              }

                            setup_postdata($post);
                            endforeach; ?>
                            
                       </div>
                       <?php 
                        else : 
                          echo '<p class="no-result">No Result Found Please Try With an Alternate Word.</p>';
                        endif; 

                        $big = 999999999;

                        $pages = paginate_links( array(
                            'base' => add_query_arg( 'page', '%#%' ),
                            'format' => '?page=%#%',
                            'current' => $paged,
                            'total' => ceil($total_record / $post_per_page),
                            'prev_next' => false,
                            'type'  => 'array',
                            'prev_next'   => TRUE,
                            'prev_text'    => __('Previous'),
                            'next_text'    => __('Next'),
                        ) );

                        if( is_array( $pages ) ) {
                        echo "<nav class='pagination-nav' data-aos='fade-in-up'>";

                         echo '<ul class="pagination">';
                          foreach ( $pages as $page ) 
                          {
                            echo '<li class="page-item">';
                            echo $page;
                            echo '</li>';
                          }

                         echo '</ul>';

                        echo "</nav>\n";
                      }
                             
                       ?>
                    </div>

                   

                </div>
            </div>
        </section>
          <?php include(TEMPLATEPATH."/inc/info.php"); ?>
      </main>
      <!-- main -->
<?php get_footer(); ?>