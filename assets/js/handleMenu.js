import { closeAllSubmenus } from './handleSubMenu.js';

export function handleMenu() {
  const navButton = document.getElementById('navButton');

  // Select the nav container that starts with 'menu-top-nav-bar-'
  const navBarContainer = document.querySelector(
    '[class^="menu-top-nav-bar-"]'
  );

  // Select the nav bar itself (if it has a language-specific ID, do similar)
  const navBar = document.getElementById('menuTopNavBar');

  if (!navButton || !navBarContainer || !navBar) {
    console.warn('handleMenu: One or more elements not found.');
    return;
  }

  navButton.addEventListener('click', () => {
    navBarContainer.classList.toggle('show-nav-bar-container');
    navBar.classList.toggle('show-nav-bar-links');
    document.body.classList.toggle('lock-scroll');

    const screenWidth = window.innerWidth;

    if (navBarContainer.classList.contains('show-nav-bar-container')) {
      closeAllSubmenus();
    }

    if (screenWidth <= 1200) {
      navBarContainerHeight();
    }
  });
}

export function navBarContainerHeight() {
  const navBarContainer = document.querySelector(
    '[class^="menu-top-nav-bar-"]'
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
        '[class^="menu-top-nav-bar-"]'
      );
      const navBar = document.getElementById('menuTopNavBar');
      document.body.classList.remove('lock-scroll');

      if (navBarContainer && navBar) {
        navBarContainer.classList.remove('show-nav-bar-container');
        navBar.classList.remove('show-nav-bar-links');
      }
    }
  }, 150)
);
