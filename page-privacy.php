<?php
/*
Template Name: Шаблон страницы "Политика конфиденциальности."
*/
?>

<?php get_header('optional');?>
  <main class="main">
    <div class="main__content-wrapper">
      <div class="main__content">
        <h1><?php the_title();?></h1>
        <?php get_template_part('includes/section', 'content');?>
      </div>
    </div>
  </main>

<?php get_footer();?>