<div class="navigation-container">
  <div class="navigation-wrapper">
    <nav class="navigation">
      <!-- Logo -->
      <div class="navigation__logo-wrapper">
        <?php if (has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img
              class="navigation__logo"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/navbar/logo.webp"
              alt="<?php bloginfo('name'); ?>"
              loading="lazy"
              decoding="async"
            >
          </a>
        <?php endif; ?>
      </div>
      <!-- Nav Links -->
      <div class="navigation__links-bar">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'menu-top-nav-bar',
            'menu_id' => 'menuTopNavBar',
          )
        );
        ?>
        <!-- Nav Button -->
        <div class="navigation__button-wrapper" id="navButton">
          <img class="navigation__button" src="<?php echo get_template_directory_uri(); ?>/assets/images/navbar/menu-btn.svg" alt="Open Menu" loading="eager" decoding="async">
        </div>
      </div>
    </nav>
  </div>
</div>