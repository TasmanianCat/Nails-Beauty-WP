import { closeAllSubmenus } from './handleSubMenu.js';

export function closeMobileMenu() {
  const navBarContainer = document.querySelector('.menu-container');
  const navBar = document.getElementById('menuTopNavBar');

  if (!navBarContainer || !navBar) return;

  navBarContainer.classList.remove('show-nav-bar-container');
  navBar.classList.remove('show-nav-bar-links');
  document.body.classList.remove('lock-scroll');

  closeAllSubmenus();
}
