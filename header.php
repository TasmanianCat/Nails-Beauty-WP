<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Салон красоты Nails & Beauty в вашем городе. Работают профессионалы маникюра, макияжа и коррекции бровей. Высокое качество услуг: маникюр, педикюр, дизайн ногтей, вечерний и свадебный макияж." />
  <meta property="og:title" content="Салон красоты Nails & Beauty">
  <meta property="og:description" content="Салон красоты Nails & Beauty в вашем городе. Работают профессионалы маникюра, макияжа и коррекции бровей. Высокое качество услуг: маникюр, педикюр, дизайн ногтей, вечерний и свадебный макияж.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/preview.jpg">
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero.webp" fetchpriority="high">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Montserrat-VariableFont_wght.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <title><?php the_title(); ?></title>
</head>
<body>
  <div class="container">
    <!-- Top CTA Bar -->
    <?php get_template_part('pages/all-pages/sections/top-cta-bar'); ?>
    <!-- Navigation Bar -->
    <?php get_template_part('pages/all-pages/sections/navigation'); ?>
    <header class="header">
      <?php get_template_part('pages/front-page/sections/hero'); ?>
    </header>