
    <footer class="footer">
      <div class="footer__section">
        <div class="footer__section-content">
          <ul class="footer__section-content-details-wrapper">
            <?php if(is_active_sidebar('footer-block-1')): ?>
              <?php dynamic_sidebar('footer-block-1');?>
            <?php endif;?>
          </ul>
          <ul class="footer__section-content-details-wrapper">
            <?php if(is_active_sidebar('footer-block-2')): ?>
              <?php dynamic_sidebar('footer-block-2');?>
            <?php endif;?>
          </ul>
          <ul class="footer__section-content-details-wrapper">
            <?php if(is_active_sidebar('footer-block-3')): ?>
              <?php dynamic_sidebar('footer-block-3');?>
            <?php endif;?>
            <li>
              <div class="footer__section-content-details-socials">
                <?php get_template_part('pages/all-pages/blocks/socials'); ?>
              </div>
            </li>
          </ul>
          <!-- Add a widget -->
          <ul class="footer__section-content-details-wrapper">
            <?php if(is_active_sidebar('footer-block-6')): ?>
              <?php dynamic_sidebar('footer-block-6');?>
            <?php endif;?>
          </ul>
          <ul class="footer__section-content-details-wrapper">
            <?php if(is_active_sidebar('footer-block-5')): ?>
              <?php dynamic_sidebar('footer-block-5');?>
            <?php endif;?>
          </ul>
          <ul class="footer__section-content-details-wrapper">
            <?php if(is_active_sidebar('footer-block-4')): ?>
              <?php dynamic_sidebar('footer-block-4');?>
            <?php endif;?>
          </ul>
        </div>
      </div>
      <div class="footer__ligal-info-container">
        <div class="footer__ligal-info">
          <span>
            <?php
            $company_name = get_bloginfo('name');
            $starting_year = 2024;
            $this_year = date('Y');

            if ($starting_year == $this_year) {
                $year_text = $starting_year;
            } else {
                $year_text = $starting_year . ' - ' . $this_year;
            }

            echo "&copy; {$year_text}, {$company_name}.";
            ?>
          </span>
        </div>
      </div>
    </footer>
    <!-- Go to top button -->
    <?php get_template_part('pages/all-pages/components/go-to-top-button'); ?>
  </div>
  <?php wp_footer();?>
  <!-- Modal -->
  <?php get_template_part('pages/all-pages/components/booking-modal'); ?>
</body>
</html>