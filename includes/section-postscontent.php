<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="main__content-post-data">
  
  <?php the_content();?>

  <div class="main__content-post-stamp-container">
    <div class="main__content-post-date-wrapper">
      <p class="main__content-post-date"><?php echo get_the_date();?></p>
    </div>
    
    <div class="main__content-post-author-wrapper">
      <p class="main__content-post-author">Автор статьи: <?php the_author();?>.</p>
    </div>
  </div>

  <div class="main__content-post-tags">
    <?php
    $tags = get_the_tags();
    if ($tags) {
      foreach($tags as $tag): ?>
        <a class="main__content-post-tag-wrapper" href="<?php echo get_tag_link($tag->term_id); ?>">
          <span class="main__content-post-tag"><?php echo $tag->name; ?></span>
        </a>
      <?php endforeach;
      }
    ?>
  </div>
</div>

<?php endwhile; else: endif; ?>