<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  // Define page IDs
  define('PAGE_TEAM_RU', 37);
  // define('PAGE_TEAM_EN', 1);
  define('PAGE_CONTACT_RU', 39);
  // define('PAGE_CONTACT_EN', 1);

  if (is_page()) {
    $page_id = get_the_ID();
    // Team Page
    if (in_array($page_id, [PAGE_TEAM_RU])) {
      echo '<meta name="description" content="Салон красоты Nails & Beauty: маникюр, макияж и коррекция бровей от опытных стилистов. Познакомьтесь с нашими мастерами и создайте идеальный образ. Профессиональный уход в деталях." />';
    }
    // Contact Page
    elseif (in_array($page_id, [PAGE_CONTACT_RU])) {
      echo '<meta name="description" content="Адрес салона красоты в вашем городе. На странице контакты вы можете записаться или оставить отзыв о салоне. Локация на карте." />';
    }
    // Default
    else {
        echo '<meta name="description" content="Лучший салон красоты в вашем городе. Идеальный маникюр и безупречный макияж от лучших специалистов. Качественное обслуживание и доступные цены." />';
    }
  }
  ?>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Montserrat-VariableFont_wght.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <title><?php the_title(); ?></title>
</head>
<body>
  <div class="container">
    <header class="header">
      <!-- Top CTA Bar -->
      <?php get_template_part('pages/all-pages/sections/top-cta-bar'); ?>
      <!-- Navigation Bar -->
      <?php get_template_part('pages/all-pages/sections/navigation'); ?>
    </header>