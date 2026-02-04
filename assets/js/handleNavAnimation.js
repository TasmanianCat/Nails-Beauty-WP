export function handleNavAnimation() {
  const navContainer = document.querySelector('.navigation-container');
  if (!navContainer) return;

  const placeholder = document.createElement('div');
  placeholder.style.height = `${navContainer.offsetHeight}px`;
  placeholder.style.display = 'none';
  placeholder.style.backgroundColor = 'rgba(26, 26, 26, 1)';
  placeholder.style.pointerEvents = 'none';

  navContainer.parentNode.insertBefore(placeholder, navContainer);

  window.addEventListener('scroll', () => {
    const pageScroll = window.scrollY;

    if (pageScroll > 64) {
      if (!navContainer.classList.contains('navigation-container--sticky')) {
        navContainer.classList.add('navigation-container--sticky');
        placeholder.style.display = 'block';
      }
    } else {
      if (navContainer.classList.contains('navigation-container--sticky')) {
        navContainer.classList.remove('navigation-container--sticky');
        placeholder.style.display = 'none';
      }
    }
  });
}
