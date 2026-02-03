import { handleNavAnimation } from './handleNavAnimation.js';
import { navBarContainerHeight, handleMenu, throttle } from './handleMenu.js';
import { handleSubMenu } from './handleSubMenu.js';
import { videosLoadingPlaying } from './handleVideosLoading.js';
import { handleRunningString } from './handleRunningString.js';
import { handleFeedbackCarousel } from './handleFeedbackCarousel.js';
import { initGoToTop } from './handleGoToTopButton.js';
import { delayedScrollToHash } from './delayedScrollToHash.js';
import { handleModal } from './handleModal.js';

document.addEventListener('DOMContentLoaded', () => {
  const initMenus = () => {
    navBarContainerHeight();
    handleNavAnimation();
    handleMenu();
    handleSubMenu();
    videosLoadingPlaying();
    handleRunningString();
    delayedScrollToHash();
    handleFeedbackCarousel();
    initGoToTop();
    handleModal();
  };

  initMenus();

  window.addEventListener('scroll', throttle(navBarContainerHeight, 50), {
    passive: true,
  });
  window.addEventListener('resize', throttle(navBarContainerHeight, 150), {
    passive: true,
  });

  // 👇 More specific observer that only watches for initial menu elements
  const observer = new MutationObserver((mutations) => {
    let shouldInitialize = false;

    mutations.forEach((mutation) => {
      // Only initialize if nav elements are added, not for any DOM change
      mutation.addedNodes.forEach((node) => {
        if (node.nodeType === 1) {
          // Element node
          if (
            node.id === 'navButton' ||
            node.classList?.contains('menu-top-nav-bar-container') ||
            node.querySelector?.(
              '#navButton, .menu-top-nav-bar-container, #menuTopNavBar'
            )
          ) {
            shouldInitialize = true;
          }
        }
      });
    });

    if (shouldInitialize) {
      const navButton = document.getElementById('navButton');
      const navBarContainer = document.querySelector(
        '.menu-top-nav-bar-container'
      );
      const navBar = document.getElementById('menuTopNavBar');

      if (navButton && navBarContainer && navBar) {
        console.log('Initial menu elements detected - initializing menus');
        initMenus();
        observer.disconnect();
      }
    }
  });

  observer.observe(document.body, { childList: true, subtree: true });
});
