<?php
/*
Template Name: Шаблон "Главная страница (Front Page)."
*/
?>

<?php get_header();?>

  <main class="main">
    <div class="main__content-wrapper">
      <div class="main__content">
        <h2><?php the_title();?></h2>
        <?php get_template_part('includes/section', 'content');?>
      </div>
    </div>
    <!-- Services section -->
    <div class="main__content-wrapper main__content-wrapper--bg-color" id="services">
      <?php get_template_part('pages/front-page/sections/services-section'); ?>
    </div>
    <!-- Price section -->
    <div class="main__content-wrapper" id="price">
      <?php get_template_part('pages/front-page/sections/price-section'); ?>
    </div>
    <!-- Videos block -->
    <div class="main__content-wrapper main__content-wrapper--bg-image-dark">
      <?php get_template_part('pages/front-page/sections/videos'); ?>
    </div>
    <!-- Booking block -->
    <div class="main__content-wrapper main__content-wrapper--bg-color">
      <?php get_template_part('pages/all-pages/blocks/booking'); ?>
    </div>
    <!-- Running string block -->
    <div class="main__content-wrapper">
      <?php get_template_part('pages/front-page/sections/running-string'); ?>
    </div>
    <!-- Feedback block -->
    <div class="main__content-wrapper">
      <?php get_template_part('pages/front-page/sections/feedback'); ?>
    </div>
  </main>

<?php get_footer();?>