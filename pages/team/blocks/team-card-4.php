<div class="main__contact-team-card">
  <?php
  // Get the access to the group of fields
  $worker_group_4 = get_field('worker_4');

  $avatar_4 = $worker_group_4['avatar_4'] ?? null;
  $image_url = '';
  $image_alt = '';

  if (is_array($avatar_4)) {
    $image_url = esc_url($avatar_4['url']);
    $wp_alt = get_post_meta($avatar_4['ID'], '_wp_attachment_image_alt', true);

    if (!empty($avatar_4['alt'])) {
      $image_alt = esc_attr($avatar_4['alt']);
    } elseif (!empty($wp_alt)) {
      $image_alt = esc_attr($wp_alt);
    }
  } elseif (is_string($avatar_4)) {
    $image_url = esc_url($avatar_4);
  }

  // Fallbacks
  if (empty($image_url)) {
    $image_url = get_template_directory_uri() . '/assets/images/team/team-avatar-4.webp';
  }
  if (empty($image_alt)) {
    $image_alt = 'Аватар 4';
  }

  if($worker_group_4) :
    // Get individual subfields with fallbacks
    $name_4 = ! empty($worker_group_4
    ['name_4'])
    ? wp_strip_all_tags($worker_group_4
    ['name_4'])
    : 'Имя отсутствует';

    $position_4 = ! empty($worker_group_4
    ['position_4'])
    ? wp_strip_all_tags($worker_group_4
    ['position_4'])
    : 'Должность отсутствует';

    $experience_4 = ! empty($worker_group_4
    ['experience_4'])
    ? wp_strip_all_tags($worker_group_4
    ['experience_4'])
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
      <?php if ($name_4) : ?><h3><?php echo esc_html( $name_4 ); ?></h3><?php endif; ?>
    </div>
    <div class="main__contact-team-card-position">
      <!-- Display a Position -->
      <?php if ($position_4) : ?><p><?php echo esc_html( $position_4 ); ?></p><?php endif; ?>
    </div>
    <div class="main__contact-team-card-experience">
      <!-- Display Experience -->
      <?php if ($experience_4) : ?><p><?php echo esc_html( $experience_4 ); ?></p><?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
</div>