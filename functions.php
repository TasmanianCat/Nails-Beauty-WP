<?php
defined('ABSPATH') || exit;

// Stop loading files that are WordPress core (Gutenberg)
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');

  wp_dequeue_script('wp-blocks');
  wp_dequeue_script('wp-i18n');
  wp_dequeue_script('wp-hooks');
}, 100);


// Disable CF7 assets everywhere
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('contact-form-7');
  wp_dequeue_script('contact-form-7');
}, 20);

// Enable only on contact page
add_action('wp_enqueue_scripts', function () {
  if (is_page('contact')) {
    if (function_exists('wpcf7_enqueue_scripts')) {
      wpcf7_enqueue_scripts();
      wpcf7_enqueue_styles();
    }
  }
}, 21);

// Dequeue the Gutenberg Block Library CSS.
function dequeue_gutenberg_block_library_css() {
  wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_gutenberg_block_library_css' );

// Enqueue CSS
function load_css() {
  wp_register_style('theme-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), false, 'all');
  wp_enqueue_style('theme-styles');
}
add_action('wp_enqueue_scripts', 'load_css');

// Enqueue JavaScript
function load_js() {
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'load_js');
// Add type="module" attribute
function add_type_attribute($tag, $handle, $src) {
    if ('main-js' === $handle) {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'add_type_attribute', 10, 3);

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Nav Bar Location',
    'mobile-menu' => 'Mobile Top Nav Bar Location',
  ),
);

// Add Custom Theme Functions
function custom_logo_setup() {
  add_theme_support('custom-logo', [
    'height'      => 64,
    'width'       => 64,
    'flex-height' => true,
    'flex-width'  => true,
  ]);
}
add_action('after_setup_theme', 'custom_logo_setup');

// Register Sidebars
function theme_sidebars() {
  register_sidebar(
    array(
      "name" => "Подвал сайта (Блок 1)",
      "id" => "footer-block-1",
      "before_title" => "<h3>",
      "after_title" => "</h3>"
    )
  );

  register_sidebar(
    array(
      "name" => "Подвал сайта (Блок 2)",
      "id" => "footer-block-2",
      "before_title" => "<h3>",
      "after_title" => "</h3>"
    )
  );

  register_sidebar(
    array(
      "name" => "Подвал сайта (Блок 3)",
      "id" => "footer-block-3",
      "before_title" => "<h3>",
      "after_title" => "</h3>"
    )
  );

  register_sidebar(
    array(
      "name" => "Подвал сайта (Блок 4)",
      "id" => "footer-block-4",
      "before_title" => "<h3>",
      "after_title" => "</h3>"
    )
  );

  register_sidebar(
    array(
      "name" => "Подвал сайта (Блок 5)",
      "id" => "footer-block-5",
      "before_title" => "<h3>",
      "after_title" => "</h3>"
    )
  );

  register_sidebar(
    array(
      "name" => "Подвал сайта (Блок 6)",
      "id" => "footer-block-6",
      "before_title" => "<h3>",
      "after_title" => "</h3>"
    )
  );
}
add_action("widgets_init", "theme_sidebars");

// Custom Image Sizes
add_image_size('post-large', 1280, 720, false);
add_image_size('post-small', 600, 300, true);

// ===========================
// Site Settings (Customizer)
// ===========================
function theme_customize_register($wp_customize) {
  // Add a new section for global site settings
  $wp_customize->add_section('site_settings_section', array(
  'title'       => __('Контактная информация', 'beauty-salon'),
  'priority'    => 30,
  'description' => __('Укажите ваш основной номер телефона.', 'beauty-salon'),
));

  // Add the setting (this stores the value in the database)
  $wp_customize->add_setting('global_phone_number', array(
    'default'           => '+7 (000) 000 0000',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
  ));

  // Add a control (input field) to the section
  $wp_customize->add_control('global_phone_number_control', array(
    'label'    => __('Номер телефона', 'beauty-salon'),
    'section'  => 'site_settings_section',
    'settings' => 'global_phone_number',
    'type'     => 'text',
  ));

}
add_action('customize_register', 'theme_customize_register');

// Shortcode to display the global phone number with link
function beauty_salon_phone_shortcode() {
    $phone_number = get_theme_mod('global_phone_number', '+7 (000) 000 0000');

    // Clean the number for the href attribute (keep the + sign)
    $clean_phone_number = preg_replace('/(?!^\+)\D+/', '', $phone_number);

    return '<a href="tel:' . esc_attr($clean_phone_number) . '" title="Phone">'
         . esc_html($phone_number)
         . '</a>';
}
add_shortcode('phone_number', 'beauty_salon_phone_shortcode');

// Remove the CMS Name from the meta data
  add_filter('the_generator', 'wpclass_wp_version_removal');

  function wpclass_wp_version_removal() {
    return '';
  }
?>