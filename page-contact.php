<?php
/*
Template Name: Шаблон страницы "Контакты."
*/
?>

<?php get_header('subpage');?>

  <main class="main">
    <div class="main__content-wrapper">
      <div class="main__content">
        <h1><?php the_title();?></h1>
        <!-- Map block -->
        <div class="main__content-map">
          <?php
          $yandex_map = get_field('yandex_map');

          if ( ! $yandex_map ) {
            echo '<p>Код карты отсутствует.</p>';
          } else {
            // Decode entities like &lt; and &gt; back to < and >
            echo html_entity_decode( $yandex_map );
          }
          ?>
        </div>
        <div class="main__content-contact">
          <h3>
            <?php
              // ACF fields for a heading
              $contact_heading = get_field('contact_heading');
              if ( ! $contact_heading ) {
                // Fallback label (Russian)
                $contact_heading = 'Заголовок отсутствует.';
              }
              // "wp_strip_all_tags" removes <p></p> from ACF
              echo esc_html( wp_strip_all_tags( $contact_heading ) );
              ?>
            </h3>
        </div>
        <!-- Get in touch block -->
        <div class="main__content-address">
          <div class="main__content-address-icon-wrapper">
            <img class="main__content-address-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/location.svg" alt="Location Icon" loading="lazy">
          </div>
          <div class="main__content-address-text">
            <p>
              <?php
              // ACF fields for a paragraph
              $address = get_field('address');
              if ( ! $address ) {
                // Fallback label (Russian)
                $address = '445036, Российская Федерация, Самарская область, город Тольятти, улица Юбилейная, дом №, подъезд №.';
              }
              // "wp_strip_all_tags" removes <p></p> from ACF
              echo esc_html( wp_strip_all_tags( $address ) );
              ?>
            </p>
          </div>
        </div>
        <div class="main__content-phone-number">
          <?php get_template_part('pages/all-pages/components/phone-number'); ?>
          <span>.</span>
        </div>
        <div class="main__content-schedule">
          <h3>
            <?php
              // ACF fields for a heading
              $schedule_heading = get_field('schedule_heading');
              if ( ! $schedule_heading ) {
                // Fallback label (Russian)
                $schedule_heading = 'Заголовок отсутствует.';
              }
              // "wp_strip_all_tags" removes <p></p> from ACF
              echo esc_html( wp_strip_all_tags( $schedule_heading ) );
              ?>
          </h3>
          <p>
            <?php
              // ACF fields for a paragraph
              $schedule_paragraph = get_field('schedule_paragraph');
              if ( ! $schedule_paragraph ) {
                // Fallback label (Russian)
                $schedule_paragraph = 'Параграф отсутствует.';
              }
              // "wp_strip_all_tags" removes <p></p> from ACF
              echo esc_html( wp_strip_all_tags( $schedule_paragraph ) );
              ?>
          </p>
        </div>
        <div class="main__contact-socials">
          <h3>
            <?php
              // ACF fields for a heading
              $socials_heading = get_field('socials_heading');
              if ( ! $socials_heading ) {
                // Fallback label (Russian)
                $socials_heading = 'Заголовок отсутствует.';
              }
              // "wp_strip_all_tags" removes <p></p> from ACF
              echo esc_html( wp_strip_all_tags( $socials_heading ) );
              ?>
          </h3>
          <div class="main__contact-socials-links">
            <?php get_template_part('pages/contact/blocks/socials-named'); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Assessment block -->
    <div class="main__content-wrapper main__content-wrapper--bg-image"  id="feedbackSection">
      <div class="main__content">
        <?php get_template_part('pages/contact/blocks/send-feedback'); ?>
        <!-- Form -->
        <div class="main__content-form-container">
          <?php
            // Get the ACF field
            $form = get_field('contact_form_7_shortcode');

            if ( ! $form ) {
              // Fallback text (Russian)
              echo '<p>Форма не размещена.</p>';
            } else {
              // Render the shortcode
              echo do_shortcode( $form );
            }
          ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer();?>