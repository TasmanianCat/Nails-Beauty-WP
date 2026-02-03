<?php
$phone_number = get_theme_mod('global_phone_number', '+7 (000) 000 0000');

// Remove all characters except digits and the leading plus sign
$clean_phone_number = preg_replace('/(?!^\+)\D+/', '', $phone_number);
?>

<a href="tel:<?php echo esc_attr($clean_phone_number); ?>" title="Phone">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/socials/phone.svg" alt="Phone" loading="lazy" decoding="async">
  <span><?php echo esc_html($phone_number); ?></span>
</a>
