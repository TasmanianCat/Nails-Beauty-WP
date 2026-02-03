<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="main__content-posts-archive">
  <div class="main__content-posts-archive-card">
    <?php if(has_post_thumbnail()):?>
      <div class="main__content-posts-archive-card-img-wrapper">
        <img class="main__content-posts-archive-card-img" src="<?php the_post_thumbnail_url('post-small');?>" alt="A Post Picture" loading="lazy" decoding="async">
      </div>
    <?php endif;?>
    <div class="main__content-posts-archive-card-preview">
      <h2><?php the_title();?></h2>
      <?php the_excerpt();?>
    </div>
  </div>
  <div class="main__content-posts-archive-read-more">
    <a href="<?php the_permalink();?>">
      <span>Читать далее</span>
    </a>
  </div>
</div>

<?php endwhile; else: endif; ?>