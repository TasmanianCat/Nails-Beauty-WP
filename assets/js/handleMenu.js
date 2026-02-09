import { closeAllSubmenus } from './handleSubMenu.js';
import { closeMobileMenu } from './handleMobileMenu.js';

let menuInitialized = false;

export function handleMenu() {
  if (menuInitialized) return;

  const navButton = document.getElementById('navButton');
  const navBarContainer = document.querySelector('.menu-container');
  const navBar = document.getElementById('menuTopNavBar');

  // ⛔ Exit quietly if menu does not exist
  if (!navButton || !navBarContainer || !navBar) {
    return;
  }

  menuInitialized = true;

  // 🍔 Burger toggle
  navButton.addEventListener('click', () => {
    navBarContainer.classList.toggle('show-nav-bar-container');
    navBar.classList.toggle('show-nav-bar-links');
    document.body.classList.toggle('lock-scroll');

    closeAllSubmenus();

    if (window.innerWidth <= 1200) {
      navBarContainerHeight();
    }
  });

  // 🔗 Close menu on link / anchor click (mobile only)
  navBarContainer.addEventListener('click', (e) => {
    const link = e.target.closest('a');
    if (!link) return;

    if (window.innerWidth <= 1200) {
      closeMobileMenu();
    }
  });
}

export function navBarContainerHeight() {
  const navBarContainer = document.querySelector(
    '[class^="menu-top-nav-bar-"]',
  );
  if (!navBarContainer) return;

  const topSpace = window.scrollY;
  const screenWidth = window.innerWidth;

  if (screenWidth <= 1200) {
    if (topSpace >= 40) {
      navBarContainer.style.minHeight = 'calc((100dvh - 104px) + 40px)';
    } else if (topSpace > 0 && topSpace < 40) {
      navBarContainer.style.minHeight = `calc((100dvh - 104px) + ${topSpace}px)`;
    } else {
      navBarContainer.style.minHeight = 'calc((100dvh - 104px))';
    }
  } else {
    navBarContainer.style.minHeight = 'auto';
  }
}

// ✅ Helper to limit scroll updates
export function throttle(func, delay) {
  let lastCall = 0;
  return (...args) => {
    const now = Date.now();
    if (now - lastCall >= delay) {
      lastCall = now;
      func(...args);
    }
  };
}

// 👇 Close submenus when resizing from mobile to desktop
window.addEventListener(
  'resize',
  throttle(() => {
    const screenWidth = window.innerWidth;
    if (screenWidth > 1200) {
      closeAllSubmenus();

      // Also ensure menu is closed
      const navBarContainer = document.querySelector(
        '[class^="menu-top-nav-bar-"]',
      );
      const navBar = document.getElementById('menuTopNavBar');
      document.body.classList.remove('lock-scroll');

      if (navBarContainer && navBar) {
        navBarContainer.classList.remove('show-nav-bar-container');
        navBar.classList.remove('show-nav-bar-links');
      }
    }
  }, 150),
);
