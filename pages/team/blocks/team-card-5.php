<div class="main__contact-team-card">
  <?php
  // Get the access to the group of fields
  $worker_group_5 = get_field('worker_5');

  $avatar_5 = $worker_group_5['avatar_5'] ?? null;
  $image_url = '';
  $image_alt = '';

  if (is_array($avatar_5)) {
    $image_url = esc_url($avatar_5['url']);
    $wp_alt = get_post_meta($avatar_5['ID'], '_wp_attachment_image_alt', true);

    if (!empty($avatar_5['alt'])) {
      $image_alt = esc_attr($avatar_5['alt']);
    } elseif (!empty($wp_alt)) {
      $image_alt = esc_attr($wp_alt);
    }
  } elseif (is_string($avatar_5)) {
    $image_url = esc_url($avatar_5);
  }

  // Fallbacks
  if (empty($image_url)) {
    $image_url = get_template_directory_uri() . '/assets/images/team/team-avatar-5.webp';
  }
  if (empty($image_alt)) {
    $image_alt = 'Аватар 5';
  }

  if($worker_group_5) :
    // Get individual subfields with fallbacks
    $name_5 = ! empty($worker_group_5
    ['name_5'])
    ? wp_strip_all_tags($worker_group_5
    ['name_5'])
    : 'Имя отсутствует';

    $position_5 = ! empty($worker_group_5
    ['position_5'])
    ? wp_strip_all_tags($worker_group_5
    ['position_5'])
    : 'Должность отсутствует';

    $experience_5 = ! empty($worker_group_5
    ['experience_5'])
    ? wp_strip_all_tags($worker_group_5
    ['experience_5'])
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
      <?php if ($name_5) : ?><h3><?php echo esc_html( $name_5 ); ?></h3><?php endif; ?>
    </div>
    <div class="main__contact-team-card-position">
      <!-- Display a Position -->
      <?php if ($position_5) : ?><p><?php echo esc_html( $position_5 ); ?></p><?php endif; ?>
    </div>
    <div class="main__contact-team-card-experience">
      <!-- Display Experience -->
      <?php if ($experience_5) : ?><p><?php echo esc_html( $experience_5 ); ?></p><?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
</div>