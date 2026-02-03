export function handleModal() {
  function openModal() {
    const anyBookBtn = document.querySelectorAll('.button--booking');
    const fadeArea = document.querySelector('.fade-area');
    const modalWrapper = document.getElementById('modalWrapper');

    for (let index = 0; index < anyBookBtn.length; index++) {
      anyBookBtn[index].addEventListener('click', () => {
        document.body.classList.add('lock-scroll');
        fadeArea.classList.toggle('fade-area-visible');
        modalWrapper.classList.add('modal-visible');
      });
    }
  }

  openModal();

  function closeModal() {
    const closeBtn = document.querySelector('.modal__head-cancel-button');
    const fadeArea = document.querySelector('.fade-area');
    const cancelBtn = document.getElementById('cancelBtn');

    closeBtn.addEventListener('click', () => {
      fadeArea.classList.remove('fade-area-visible');
      modalWrapper.classList.remove('modal-visible');
      document.body.classList.remove('lock-scroll');
    });

    cancelBtn.addEventListener('click', () => {
      fadeArea.classList.remove('fade-area-visible');
      modalWrapper.classList.remove('modal-visible');
      document.body.classList.remove('lock-scroll');
    });
  }

  closeModal();
}
