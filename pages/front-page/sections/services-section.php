<div class="main__content">
  <h2>
    <?php
    $services_list_block_heading = get_field('services_list_block_heading');
    echo esc_html( wp_strip_all_tags( $services_list_block_heading ?: 'Услуги салона' ) );
    ?>
    </h2>
    <div class="main__content-sevices-list">
      <?php
      if( have_rows('services_list') ):
        while( have_rows('services_list') ): the_row();
          
          // Start from 1 and go up to however many services you have
          $counter = 1;
          
          // Keep checking for service_desc groups until we find an empty one
          while( true ):
            $service_desc_key = 'service_desc_' . $counter;
            $service_desc = get_sub_field($service_desc_key);
            
            // If this service_desc doesn't exist or is empty, break the loop
            if( !$service_desc || empty($service_desc) ) {
              break;
            }
            
            // Get fields from the service_desc group
            $image = isset($service_desc['service_image_' . $counter]) ? $service_desc['service_image_' . $counter] : false;
            $heading = isset($service_desc['services_sub_heading_' . $counter]) ? $service_desc['services_sub_heading_' . $counter] : '';
            $p1 = isset($service_desc['services_' . $counter . '_p_1']) ? $service_desc['services_' . $counter . '_p_1'] : '';
            $p2 = isset($service_desc['services_' . $counter . '_p_2']) ? $service_desc['services_' . $counter . '_p_2'] : '';
            
            // Only display if there's at least a heading
            if( $heading ):
      ?>
      <!-- The First Item is here -->
      <div class="main__content-sevices-list-item">
        <?php if( $image ): ?>
          <div class="main__content-sevices-list-item-image-wrapper">
            <img
              src="<?php echo esc_url($image['url']); ?>"
              alt="<?php echo esc_attr($image['alt'] ?: 'Изображение услуги ' . $counter); ?>"
              loading="lazy"
            >
          </div>
        <?php endif; ?>
        <div class="main__content-sevices-list-item-description">
          <h3><?php echo esc_html( wp_strip_all_tags( $heading ) ); ?></h3>
          <?php if( $p1 ): ?>
          <p><?php echo esc_html( wp_strip_all_tags( $p1 ) ); ?></p>
          <?php endif; ?>
          
          <?php if( $p2 ): ?>
          <p><?php echo esc_html( wp_strip_all_tags( $p2 ) ); ?></p>
          <?php endif; ?>
        </div>
        
        <div class="main__content-services-list-item-booking">
          <button class="button button--contained button--booking">
            <?php
            $btn_book = get_field('hero_button_book_now');
            echo esc_html( $btn_book ?: 'Записаться' );
            ?>
          </button>
        </div>
      </div>
      
      <?php
            endif; // End if heading exists
            
            $counter++;
          endwhile; // End while loop through service_desc groups
          
        endwhile; // End while have_rows('services_list')
      else:
        echo '<p>Услуги пока не добавлены.</p>';
      endif;
      ?>
    </div>
</div>