<?php get_header(); ?>
<section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4">Lifestyle Blog Post</h2>
          </div>
          <div class="col-md-12">

           <div class="owl-carousel owl-theme home-slider">
              <?php
                   $args = new WP_Query(array(
                       'posts_per_page' => 3,
                        'post_type' => 'post'
                  ));

              while($args->have_posts()) {
                    $args->the_post(); ?>
              <div>
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                <a href="<?php the_permalink(); ?>" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php echo $thumb['0'];?>')">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
                      <span class="mr-2"><?php echo get_the_date('F j, Y'); ?> </span> 
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content()?></p>
                  </div>
                </a>
              </div>
            <?php }
            ?>

            </div>

          </div>
        </div>
      </div>

    </section>
    <!-- END section -->

    <section class="site-section py-sm">
      <div class="container">
        <div class="row">
           <div class="col-md-6">
             <h2 class="mb-4">Event Post Type</h2>
           </div>
         </div>
         <div class="row blog-entries">
             <div class="col-md-12 col-lg-8 main-content">

               <div class="row mb-5 mt-5">


              <div class="col-md-12">


                  <?php
              $homepageEvents = new WP_Query(array(
                  'posts_per_page' => 3,
                   'post_type' => 'event'
                 ));
                 while($homepageEvents->have_posts()) {
                   $homepageEvents->the_post(); ?>
                   <div class="post-entry-horzontal">
                  <a href="<?php the_permalink(); ?>">
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <div class="image"  data-animate-effect="fadeIn" style="background-image: url('<?php echo $thumb['0'];?>')"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="category"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
                        <span class="mr-2"><?php echo get_the_date('F j, Y'); ?> </span>
                      </div>
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_excerpt(); ?></p>
                    </span>
                  </a>
                </div>
              <?php }
              ?>
                <!-- END post -->

               </div>
             </div>
           </div>
         </div>
      </section>
    <?php get_footer(); ?>
