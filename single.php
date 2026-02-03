<?php get_header('optional');?>

<main class="main">
  <div class="main__content">
    <div class="main__content-post-single">
      <div class="main__content-post-single-image-wrapper">
        <?php if(has_post_thumbnail()):?>
          <img class="main__content-post-single-image" src="<?php the_post_thumbnail_url('post-large');?>" alt="A Post Picture" loading="lazy" decoding="async">
        <?php endif;?>
      </div>
      <h2 class="main__content-post-single-heading"><?php the_title();?></h2>
      <?php get_template_part('includes/section', 'postscontent');?>
    </div>
  </div>
</main>

<?php get_footer();?>