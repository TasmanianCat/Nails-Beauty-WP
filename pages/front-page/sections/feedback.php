<div class="main__content">
  <div class="main__content-feedback-container">
    <div class="main__content-feedback">
      <h2>
        <?php
        // ACF fields for a heading
        $feedback_section_heading_1 = get_field('feedback_section_heading_1');
        if ( ! $feedback_section_heading_1 ) {
          // Fallback label (Russian)
          $feedback_section_heading_1 = 'Профессиональный подход';
        }

        // "wp_strip_all_tags" removes <p></p> from ACF
        echo esc_html( wp_strip_all_tags( $feedback_section_heading_1 ) );
        ?>
      </h2>
      <p>
        <?php
        // ACF fields for a paragraph
        $feedback_section_paragraph_1 = get_field('feedback_section_p_1');
        if ( ! $feedback_section_paragraph_1 ) {
          // Fallback label (Russian)
          $feedback_section_paragraph_1 = 'Мы заслужили репутацию ведущего салона красоты благодаря превосходному обслуживанию клиентов и вниманию наших сотрудников к деталям. Более того, мы используем только лучшие средства на рынке для ухода за вашими волосами, а также для выполнения различных сопутствующих процедур.';
        }

        // "wp_strip_all_tags" removes <p></p> from ACF
        echo esc_html( wp_strip_all_tags( $feedback_section_paragraph_1 ) );
        ?>
      </p>
      <p>
        <?php
        // ACF fields for a paragraph
        $feedback_section_paragraph_2 = get_field('feedback_section_p_2');
        if ( ! $feedback_section_paragraph_2 ) {
          // Fallback label (Russian)
          $feedback_section_paragraph_2 = 'Если вы хотите оценить работу нашего салона или оставить отзыв о качестве услуг специалиста, скорее жмите кнопку "Оценить"!';
        }

        // "wp_strip_all_tags" removes <p></p> from ACF
        echo esc_html( wp_strip_all_tags( $feedback_section_paragraph_2 ) );
        ?>
      </p>
      <p>
        <?php
        // ACF fields for a paragraph
        $feedback_section_paragraph_3 = get_field('feedback_section_p_3');
        if ( ! $feedback_section_paragraph_3 ) {
          // Fallback label (Russian)
          $feedback_section_paragraph_3 = 'Будем рады услышать ваше мнение.';
        }

        // "wp_strip_all_tags" removes <p></p> from ACF
        echo esc_html( wp_strip_all_tags( $feedback_section_paragraph_3 ) );
        ?>
      </p>
      <div class="main__content-feedback-cta">
        <a href="/contact/#feedbackSection">
            <button class="button button--contained">
            <?php
            $btn_rate = get_field('feedback_button_rate_us');
            if ( ! $btn_rate ) {
              $btn_rate = 'Оценить';
            }
            echo esc_html( $btn_rate );
            ?>
          </button>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Client Feedback Carousel -->
<section class="main__content-feedback-carousel-container">
  <div class="main__content-feedback-carousel">
    <!-- Previous button -->
    <button class="main__content-feedback-carousel-btn main__content-feedback-carousel-btn--prev">
      <img class="main__content-feedback-carousel-btn-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/left-arrow.svg" aria-label="Previous feedback" alt="Previous Button">
    </button>

    <ul class="main__content-feedback-carousel-list">
      <!-- Item 1 -->
      <?php
      // Get the group field (returns an array of subfields)
      $feedback_group = get_field('feedback_section_carousel_text_1');

      if ( $feedback_group ) :
        // Get individual subfields with fallbacks
        $name = ! empty( $feedback_group['feedback_section_carousel_name_1'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_name_1'] )
          : 'Анонимный клиент';

        $p1 = ! empty( $feedback_group['feedback_section_carousel_text_1_p_1'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_1_p_1'] )
          : '';

        $p2 = ! empty( $feedback_group['feedback_section_carousel_text_1_p_2'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_1_p_2'] )
          : '';

        $p3 = ! empty( $feedback_group['feedback_section_carousel_text_1_p_3'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_1_p_3'] )
          : '';
        ?>
        <li class="main__content-feedback-carousel-item">
          <div class="main__content-feedback-carousel-item-header">
            <h3 class="main__content-feedback-carousel-item-name">
              <?php echo esc_html( $name ); ?>
            </h3>
            <div class="main__content-feedback-carousel-item-stars">
              <?php
              // Static 5 stars (or you could make this dynamic later)
              for ( $i = 0; $i < 5; $i++ ) :
              ?>
                <div class="main__content-feedback-carousel-item-star-wrapper">
                  <img class="main__content-clients-feedback-item-star" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/star.svg" alt="Star Icon">
                </div>
              <?php endfor; ?>
            </div>
          </div>

          <?php if ( $p1 ) : ?><p><?php echo esc_html( $p1 ); ?></p><?php endif; ?>
          <?php if ( $p2 ) : ?><p><?php echo esc_html( $p2 ); ?></p><?php endif; ?>
          <?php if ( $p3 ) : ?><p><?php echo esc_html( $p3 ); ?></p><?php endif; ?>
        </li>
      <?php
      endif;
      ?>
      <!-- Item 2 -->
      <?php
      // Get the group field (returns an array of subfields)
      $feedback_group = get_field('feedback_section_carousel_text_2');

      if ( $feedback_group ) :
        // Get individual subfields with fallbacks
        $name = ! empty( $feedback_group['feedback_section_carousel_name_2'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_name_2'] )
          : 'Анонимный клиент';

        $p1 = ! empty( $feedback_group['feedback_section_carousel_text_2_p_1'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_2_p_1'] )
          : '';

        $p2 = ! empty( $feedback_group['feedback_section_carousel_text_2_p_2'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_2_p_2'] )
          : '';

        $p3 = ! empty( $feedback_group['feedback_section_carousel_text_2_p_3'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_2_p_3'] )
          : '';
        ?>
        <li class="main__content-feedback-carousel-item">
          <div class="main__content-feedback-carousel-item-header">
            <h3 class="main__content-feedback-carousel-item-name">
              <?php echo esc_html( $name ); ?>
            </h3>
            <div class="main__content-feedback-carousel-item-stars">
              <?php
              // Static 5 stars (or you could make this dynamic later)
              for ( $i = 0; $i < 5; $i++ ) :
              ?>
                <div class="main__content-feedback-carousel-item-star-wrapper">
                  <img class="main__content-clients-feedback-item-star" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/star.svg" alt="Star Icon">
                </div>
              <?php endfor; ?>
            </div>
          </div>

          <?php if ( $p1 ) : ?><p><?php echo esc_html( $p1 ); ?></p><?php endif; ?>
          <?php if ( $p2 ) : ?><p><?php echo esc_html( $p2 ); ?></p><?php endif; ?>
          <?php if ( $p3 ) : ?><p><?php echo esc_html( $p3 ); ?></p><?php endif; ?>
        </li>
      <?php
      endif;
      ?>
      <!-- Item 3 -->
      <?php
      // Get the group field (returns an array of subfields)
      $feedback_group = get_field('feedback_section_carousel_text_3');

      if ( $feedback_group ) :
        // Get individual subfields with fallbacks
        $name = ! empty( $feedback_group['feedback_section_carousel_name_3'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_name_3'] )
          : 'Анонимный клиент';

        $p1 = ! empty( $feedback_group['feedback_section_carousel_text_3_p_1'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_3_p_1'] )
          : '';

        $p2 = ! empty( $feedback_group['feedback_section_carousel_text_3_p_2'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_3_p_2'] )
          : '';

        $p3 = ! empty( $feedback_group['feedback_section_carousel_text_3_p_3'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_3_p_3'] )
          : '';
        ?>
        <li class="main__content-feedback-carousel-item">
          <div class="main__content-feedback-carousel-item-header">
            <h3 class="main__content-feedback-carousel-item-name">
              <?php echo esc_html( $name ); ?>
            </h3>
            <div class="main__content-feedback-carousel-item-stars">
              <?php
              // Static 5 stars (or you could make this dynamic later)
              for ( $i = 0; $i < 5; $i++ ) :
              ?>
                <div class="main__content-feedback-carousel-item-star-wrapper">
                  <img class="main__content-clients-feedback-item-star" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/star.svg" alt="Star Icon">
                </div>
              <?php endfor; ?>
            </div>
          </div>

          <?php if ( $p1 ) : ?><p><?php echo esc_html( $p1 ); ?></p><?php endif; ?>
          <?php if ( $p2 ) : ?><p><?php echo esc_html( $p2 ); ?></p><?php endif; ?>
          <?php if ( $p3 ) : ?><p><?php echo esc_html( $p3 ); ?></p><?php endif; ?>
        </li>
      <?php
      endif;
      ?>
      <!-- Item 4 -->
      <?php
      // Get the group field (returns an array of subfields)
      $feedback_group = get_field('feedback_section_carousel_text_4');

      if ( $feedback_group ) :
        // Get individual subfields with fallbacks
        $name = ! empty( $feedback_group['feedback_section_carousel_name_4'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_name_4'] )
          : 'Анонимный клиент';

        $p1 = ! empty( $feedback_group['feedback_section_carousel_text_4_p_1'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_4_p_1'] )
          : '';

        $p2 = ! empty( $feedback_group['feedback_section_carousel_text_4_p_2'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_4_p_2'] )
          : '';

        $p3 = ! empty( $feedback_group['feedback_section_carousel_text_4_p_3'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_4_p_3'] )
          : '';
        ?>
        <li class="main__content-feedback-carousel-item">
          <div class="main__content-feedback-carousel-item-header">
            <h3 class="main__content-feedback-carousel-item-name">
              <?php echo esc_html( $name ); ?>
            </h3>
            <div class="main__content-feedback-carousel-item-stars">
              <?php
              // Static 5 stars (or you could make this dynamic later)
              for ( $i = 0; $i < 5; $i++ ) :
              ?>
                <div class="main__content-feedback-carousel-item-star-wrapper">
                  <img class="main__content-clients-feedback-item-star" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/star.svg" alt="Star Icon">
                </div>
              <?php endfor; ?>
            </div>
          </div>

          <?php if ( $p1 ) : ?><p><?php echo esc_html( $p1 ); ?></p><?php endif; ?>
          <?php if ( $p2 ) : ?><p><?php echo esc_html( $p2 ); ?></p><?php endif; ?>
          <?php if ( $p3 ) : ?><p><?php echo esc_html( $p3 ); ?></p><?php endif; ?>
        </li>
      <?php
      endif;
      ?>
      <!-- Item 5 -->
      <?php
      // Get the group field (returns an array of subfields)
      $feedback_group = get_field('feedback_section_carousel_text_5');

      if ( $feedback_group ) :
        // Get individual subfields with fallbacks
        $name = ! empty( $feedback_group['feedback_section_carousel_name_5'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_name_5'] )
          : 'Анонимный клиент';

        $p1 = ! empty( $feedback_group['feedback_section_carousel_text_5_p_1'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_5_p_1'] )
          : '';

        $p2 = ! empty( $feedback_group['feedback_section_carousel_text_5_p_2'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_5_p_2'] )
          : '';

        $p3 = ! empty( $feedback_group['feedback_section_carousel_text_5_p_3'] )
          ? wp_strip_all_tags( $feedback_group['feedback_section_carousel_text_5_p_3'] )
          : '';
        ?>
        <li class="main__content-feedback-carousel-item">
          <div class="main__content-feedback-carousel-item-header">
            <h3 class="main__content-feedback-carousel-item-name">
              <?php echo esc_html( $name ); ?>
            </h3>
            <div class="main__content-feedback-carousel-item-stars">
              <?php
              // Static 5 stars (or you could make this dynamic later)
              for ( $i = 0; $i < 5; $i++ ) :
              ?>
                <div class="main__content-feedback-carousel-item-star-wrapper">
                  <img class="main__content-clients-feedback-item-star" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/star.svg" alt="Star Icon">
                </div>
              <?php endfor; ?>
            </div>
          </div>

          <?php if ( $p1 ) : ?><p><?php echo esc_html( $p1 ); ?></p><?php endif; ?>
          <?php if ( $p2 ) : ?><p><?php echo esc_html( $p2 ); ?></p><?php endif; ?>
          <?php if ( $p3 ) : ?><p><?php echo esc_html( $p3 ); ?></p><?php endif; ?>
        </li>
      <?php
      endif;
      ?>
    </ul>
    <!-- Next button -->
    <button class="main__content-feedback-carousel-btn main__content-feedback-carousel-btn--next">
      <img class="main__content-feedback-carousel-btn-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/right-arrow.svg" aria-label="Next feedback" alt="Next Button">
    </button>
  </div>
</section>