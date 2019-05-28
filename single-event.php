<?php get_header(); ?>

<div class="container">
<div class="row mb-5">
  <?php
      while (have_posts()){
        the_post(); ?>
      <div class="col-md-12">
               <h2 class="title_center"><?php the_title(); ?></h2>
      </div>
      <div class="col-md-12">
                  <div class="post-meta title_center">
                    <span class="category"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
                    <span class="mr-2"><?php echo get_the_date('F j, Y'); ?> </span>
                    <span class="fa fa-user"> Posted by <?php the_author_posts_link(); ?></span>
                  </div>
      </div>
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <div class="col-md-12">
                <img src="<?php echo $thumb['0'];?>" alt="Image placeholder" class="img-fluid img_center">
      </div>


 </div>
 <div class="row mb-5">
    <div class="col-md-12"><?php the_excerpt(); ?></div>
</div>

<?php } ?>
  
</div>

<?php get_footer(); ?>
