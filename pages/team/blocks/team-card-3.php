<div class="main__contact-team-card">
  <?php
  // Get the access to the group of fields
  $worker_group_3 = get_field('worker_3');

  $avatar_3 = $worker_group_3['avatar_3'] ?? null;
  $image_url = '';
  $image_alt = '';

  if (is_array($avatar_3)) {
    $image_url = esc_url($avatar_3['url']);
    $wp_alt = get_post_meta($avatar_3['ID'], '_wp_attachment_image_alt', true);

    if (!empty($avatar_3['alt'])) {
      $image_alt = esc_attr($avatar_3['alt']);
    } elseif (!empty($wp_alt)) {
      $image_alt = esc_attr($wp_alt);
    }
  } elseif (is_string($avatar_3)) {
    $image_url = esc_url($avatar_3);
  }

  // Fallbacks
  if (empty($image_url)) {
    $image_url = get_template_directory_uri() . '/assets/images/team/team-avatar-3.webp';
  }
  if (empty($image_alt)) {
    $image_alt = 'Аватар 3';
  }

  if($worker_group_3) :
    // Get individual subfields with fallbacks
    $name_3 = ! empty($worker_group_3
    ['name_3'])
    ? wp_strip_all_tags($worker_group_3
    ['name_3'])
    : 'Имя отсутствует';

    $position_3 = ! empty($worker_group_3
    ['position_3'])
    ? wp_strip_all_tags($worker_group_3
    ['position_3'])
    : 'Должность отсутствует';

    $experience_3 = ! empty($worker_group_3
    ['experience_3'])
    ? wp_strip_all_tags($worker_group_3
    ['experience_3'])
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
      <?php if ($name_3) : ?><h3><?php echo esc_html( $name_3 ); ?></h3><?php endif; ?>
    </div>
    <div class="main__contact-team-card-position">
      <!-- Display a Position -->
      <?php if ($position_3) : ?><p><?php echo esc_html( $position_3 ); ?></p><?php endif; ?>
    </div>
    <div class="main__contact-team-card-experience">
      <!-- Display Experience -->
      <?php if ($experience_3) : ?><p><?php echo esc_html( $experience_3 ); ?></p><?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
</div>