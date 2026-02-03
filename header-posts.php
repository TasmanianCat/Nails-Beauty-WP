<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Новости и публикации салона красоты. На странице вы сможете ознакомиться с интересными статьями о мире красоты и моды, полезными советами, а также выгодными предложениями." />
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Montserrat-VariableFont_wght.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <title>
    <?php
    $categories = get_the_category();

    if ( ! empty( $categories ) ) {
      echo esc_html( $categories[0]->name );	
    }
    ?>
  </title>
</head>
<body>
  <div class="container">
    <header class="header">
      <!-- Top CTA Bar -->
      <?php get_template_part('pages/all-pages/sections/top-cta-bar'); ?>
      <!-- Navigation Bar -->
      <?php get_template_part('pages/all-pages/sections/navigation'); ?>
    </header>