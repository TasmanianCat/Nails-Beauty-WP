<div class="main__contact-team-card">
  <?php
  // Get the access to the group of fields
  $worker_group_6 = get_field('worker_6');

  $avatar_6 = $worker_group_6['avatar_6'] ?? null;
  $image_url = '';
  $image_alt = '';

  if (is_array($avatar_6)) {
    $image_url = esc_url($avatar_6['url']);
    $wp_alt = get_post_meta($avatar_6['ID'], '_wp_attachment_image_alt', true);

    if (!empty($avatar_6['alt'])) {
      $image_alt = esc_attr($avatar_6['alt']);
    } elseif (!empty($wp_alt)) {
      $image_alt = esc_attr($wp_alt);
    }
  } elseif (is_string($avatar_6)) {
    $image_url = esc_url($avatar_6);
  }

  // Fallbacks
  if (empty($image_url)) {
    $image_url = get_template_directory_uri() . '/assets/images/team/team-avatar-6.webp';
  }
  if (empty($image_alt)) {
    $image_alt = 'Аватар 6';
  }

  if($worker_group_6) :
    // Get individual subfields with fallbacks
    $name_6 = ! empty($worker_group_6
    ['name_6'])
    ? wp_strip_all_tags($worker_group_6
    ['name_6'])
    : 'Имя отсутствует';

    $position_6 = ! empty($worker_group_6
    ['position_6'])
    ? wp_strip_all_tags($worker_group_6
    ['position_6'])
    : 'Должность отсутствует';

    $experience_6 = ! empty($worker_group_6
    ['experience_6'])
    ? wp_strip_all_tags($worker_group_6
    ['experience_6'])
    : 'Опыт отсутствует';
  ?>
  <div class="main__contact-team-card-avatar">
    <!-- Display an Avatar -->
    <?php if ($image_url) : ?>
    <img class="main__contact-team-card-avatar-image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
    <?php endif; ?>
  </div>
  <div class="main__contact-team-card-description">
    <div class="main__contact-team-card-name">
      <!-- Display a Name -->
      <?php if ($name_6) : ?><h3><?php echo esc_html( $name_6 ); ?></h3><?php endif; ?>
    </div>
    <div class="main__contact-team-card-position">
      <!-- Display a Position -->
      <?php if ($position_6) : ?><p><?php echo esc_html( $position_6 ); ?></p><?php endif; ?>
    </div>
    <div class="main__contact-team-card-experience">
      <!-- Display Experience -->
      <?php if ($experience_6) : ?><p><?php echo esc_html( $experience_6 ); ?></p><?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
</div>