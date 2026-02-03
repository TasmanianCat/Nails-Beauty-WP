<div class="hero">
  <div class="hero__content-wrapper">
    <div class="hero__content">
      <div class="hero__content-cta-container">
        <?php
        // ACF field value
        $hero_heading = get_field('hero_heading_h1');
        $hero_heading_h1_text_support = get_field('hero_heading_h1_support');

        // Fallback if field is empty — by default (Russian)
        if ( ! $hero_heading ) {
          $hero_heading = 'Будьте собой. Подчеркните свою естественную красоту.';
        }
        if ( ! $hero_heading_h1_text_support ) {
          $hero_heading_h1_text_support = 'Создаём образы, в которых вы чувствуете себя уверенно и комфортно';
        }
        ?>
        <h1 class="hero__content-heading"><?php echo esc_html( $hero_heading ); ?></h1>
        <p class="hero__content-heading-support"><?php echo esc_html( $hero_heading_h1_text_support ); ?></p>
        <div class="hero__content-cta">
          <button class="button button--contained button--animated-top button--booking">
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
      
      <div class="hero__content-images-container">
        <div class="hero__content-image-wrapper hero__content-image-wrapper--1"></div>
        <div class="hero__content-image-wrapper hero__content-image-wrapper--2"></div>
        <div class="hero__content-image-wrapper hero__content-image-wrapper--3"></div>
        <div class="hero__content-image-wrapper hero__content-image-wrapper--4"></div>
      </div>
    </div>
  </div>
  <div class="hero__panel"></div>
</div>