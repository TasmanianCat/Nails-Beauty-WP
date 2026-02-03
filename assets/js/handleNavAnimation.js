export function handleNavAnimation() {
  const navContainer = document.querySelector('.navigation-container');
  if (!navContainer) return;

  // Create a placeholder div to preserve space
  const placeholder = document.createElement('div');
  placeholder.style.height = `${navContainer.offsetHeight}px`;
  placeholder.style.display = 'none';
  navContainer.parentNode.insertBefore(placeholder, navContainer);

  window.addEventListener('scroll', () => {
    const pageScroll = window.scrollY;

    if (pageScroll > 64) {
      if (!navContainer.classList.contains('navigation-container--sticky')) {
        navContainer.classList.add('navigation-container--sticky');
        placeholder.style.display = 'block'; // reserve space
      }
    } else {
      if (navContainer.classList.contains('navigation-container--sticky')) {
        navContainer.classList.remove('navigation-container--sticky');
        placeholder.style.display = 'none'; // remove space
      }
    }
  });
}
