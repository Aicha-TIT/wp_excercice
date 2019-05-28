<?php get_header(); ?>

<div class="container">
<?php if ( have_posts()) : while (have_posts()) : the_post(); ?>
 
 <div class="row mb-5">
    <div class="col-md-12"><?php the_content(); ?></div>
</div>
<?php if(has_post_thumbnail()) {
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="row mb-5"> 
    
              <div class="col-md-12">
                <img src="<?php echo $thumb['0'];?>" alt="Image placeholder" class="img-fluid img_center">
              </div>
 </div>
    <?php }?>  
<?php endwhile; else: ?>
    <p>Sorry, no event found.</p>
<?php endif; ?>


</div>

<?php get_footer(); ?>