export function handleFeedbackCarousel() {
  const list = document.querySelector('.main__content-feedback-carousel-list');
  const items = document.querySelectorAll(
    '.main__content-feedback-carousel-item'
  );
  const prevBtn = document.querySelector(
    '.main__content-feedback-carousel-btn--prev'
  );
  const nextBtn = document.querySelector(
    '.main__content-feedback-carousel-btn--next'
  );

  if (!list || !items.length || !prevBtn || !nextBtn) return;

  let currentIndex = 0;

  function getItemsPerView() {
    if (window.innerWidth < 600) return 1;
    if (window.innerWidth < 992) return 2;
    return 3;
  }

  function updateCarousel() {
    const itemsPerView = getItemsPerView();

    // Get sub-pixel accurate width of the item
    const itemWidth = items[0].getBoundingClientRect().width;

    // Get CSS flex gap (true value)
    const style = window.getComputedStyle(list);
    const gap = parseFloat(style.gap) || 0;

    // Real full width of one step (item + gap)
    const step = itemWidth + gap;

    // Avoid extra shift on last items
    const maxIndex = items.length - itemsPerView;
    if (currentIndex > maxIndex) currentIndex = maxIndex;
    if (currentIndex < 0) currentIndex = 0;

    const offset = -(currentIndex * step);
    list.style.transform = `translateX(${offset}px)`;
  }

  nextBtn.addEventListener('click', () => {
    currentIndex++;
    updateCarousel();
  });

  prevBtn.addEventListener('click', () => {
    currentIndex--;
    updateCarousel();
  });

  window.addEventListener('resize', () => {
    currentIndex = 0;
    updateCarousel();
  });

  updateCarousel();
}
