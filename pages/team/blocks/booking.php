<div class="main__content">
  <div class="main__content-booking-container">
    <div class="main__content-booking main__content-booking--mb">
      <h2>
        <?php
        // ACF fields for a heading
        $booking_heading = get_field('booking_heading');
        if ( ! $booking_heading ) {
          // Fallback label (Russian)
          $booking_heading = 'Принимаем по записи';
        }

        // "wp_strip_all_tags" removes <p></p> from ACF
        echo esc_html( wp_strip_all_tags( $booking_heading ) );
        ?>
      </h2>
      <p>
        <?php
        // ACF fields for a paragraph
        $booking_paragraph_1 = get_field('booking_p_1');
        if ( ! $booking_paragraph_1 ) {
          // Fallback label (Russian)
          $booking_paragraph_1 = 'Запишитесь на бесплатную консультацию парикмахера сегодня! Профессиональные стрижки, потрясающие цвета и индивидуальные укладки - ведь ваши волосы заслуживают лучшего.';
        }

        // "wp_strip_all_tags" removes <p></p> from ACF
        echo esc_html( wp_strip_all_tags( $booking_paragraph_1 ) );
        ?>
      </p>
      <p>
        <?php
        // ACF fields for a paragraph
        $booking_paragraph_2 = get_field('booking_p_2');
        if ( ! $booking_paragraph_2 ) {
          // Fallback label (Russian)
          $booking_paragraph_2 = 'Мы рекомендуем вам записываться на приём заранее, особенно в часы пик. Вы можете просто позвонить или написать нам, чтобы записаться на приём!';
        }
        // "wp_strip_all_tags" removes <p></p> from ACF
        echo esc_html( wp_strip_all_tags( $booking_paragraph_2 ) );
        ?>
      </p>
    </div>
    <div class="main__content-booking">
      <button class="button button--contained button--booking">
        <?php
        // ACF fields for button label
        $btn_book = get_field('hero_button_book_now'); // optional ACF field
        if ( ! $btn_book ) {
          // Fallback label (Russian)
          $btn_book = 'Записаться';
        }
        echo esc_html( $btn_book );
        ?>
      </button>
    </div>
  </div>
</div>