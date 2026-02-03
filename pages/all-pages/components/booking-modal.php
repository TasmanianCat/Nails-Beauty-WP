<div class="fade-area">
  <div class="modal-wrapper" id="modalWrapper">
    <div class="modal">
      <div class="modal__head">
        <div class="modal__head-heading">
          <h2>Выберите способ</h2>
        </div>
        <div class="modal__head-cancel-button">
          <img class="modal__head-cancel-button-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/close.svg" alt="Закрыть" title="Закрыть">
        </div>
      </div>
      <div class="modal__content">
        <div class="modal__content-link">
          <?php get_template_part('pages/all-pages/components/phone-number'); ?>
          <span>(Звонок)</span>
        </div>
        <div class="modal__content-link">
          <a href="" title="Telegram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/telegram.svg" alt="Telegram" loading="lazy" decoding="async">Написать в Telegram</a>
        </div>
        <div class="modal__content-link">
          <a href="" title="VK"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/vk.svg" alt="VK" loading="lazy" decoding="async">Написать в VK</a>
        </div>
      </div>
      <div class="modal__cancel">
        <div class="modal__cancel-button">
          <button id="cancelBtn" class="button button--text">Отмена</button>
        </div>
      </div>
    </div>
  </div>
</div>