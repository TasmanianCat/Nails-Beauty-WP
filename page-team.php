<?php
/*
Template Name: Шаблон страницы "Специалисты."
*/
?>

<?php get_header('subpage');?>

  <main class="main">
    <div class="main__content-wrapper main__content-wrapper--bg-image">
      <div class="main__content">
        <h1><?php the_title();?></h1>
        <!-- Introduction block -->
        <?php get_template_part('includes/section', 'content');?>
      </div>
    </div>
    <div class="main__content-wrapper main__content-wrapper--bg-color">
      <div class="main__content">
        <!-- Team block -->
        <?php get_template_part('pages/team/blocks/team'); ?>
      </div>
    </div>
    <!-- Booking block -->
    <div class="main__content-wrapper main__content-wrapper--bg-image">
      <?php get_template_part('pages/team/blocks/booking'); ?>
    </div>
  </main>

<?php get_footer();?>