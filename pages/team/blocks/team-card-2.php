<div class="main__contact-team-card">
  <?php
  // Get the access to the group of fields
  $worker_group_2 = get_field('worker_2');

  $avatar_2 = $worker_group_2['avatar_2'] ?? null;
  $image_url = '';
  $image_alt = '';

  if (is_array($avatar_2)) {
    $image_url = esc_url($avatar_2['url']);
    $wp_alt = get_post_meta($avatar_2['ID'], '_wp_attachment_image_alt', true);

    if (!empty($avatar_2['alt'])) {
      $image_alt = esc_attr($avatar_2['alt']);
    } elseif (!empty($wp_alt)) {
      $image_alt = esc_attr($wp_alt);
    }
  } elseif (is_string($avatar_2)) {
    $image_url = esc_url($avatar_2);
  }

  // Fallbacks
  if (empty($image_url)) {
    $image_url = get_template_directory_uri() . '/assets/images/team/team-avatar-2.webp';
  }
  if (empty($image_alt)) {
    $image_alt = 'Аватар 2';
  }

  if($worker_group_2) :
    // Get individual subfields with fallbacks
    $name_2 = ! empty($worker_group_2
    ['name_2'])
    ? wp_strip_all_tags($worker_group_2
    ['name_2'])
    : 'Имя отсутствует';

    $position_2 = ! empty($worker_group_2
    ['position_2'])
    ? wp_strip_all_tags($worker_group_2
    ['position_2'])
    : 'Должность отсутствует';

    $experience_2 = ! empty($worker_group_2
    ['experience_2'])
    ? wp_strip_all_tags($worker_group_2
    ['experience_2'])
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
      <?php if ($name_2) : ?><h3><?php echo esc_html( $name_2 ); ?></h3><?php endif; ?>
    </div>
    <div class="main__contact-team-card-position">
      <!-- Display a Position -->
      <?php if ($position_2) : ?><p><?php echo esc_html( $position_2 ); ?></p><?php endif; ?>
    </div>
    <div class="main__contact-team-card-experience">
      <!-- Display Experience -->
      <?php if ($experience_2) : ?><p><?php echo esc_html( $experience_2 ); ?></p><?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
</div>