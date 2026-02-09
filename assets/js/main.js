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

  window.addEventListener('scroll', throttle(navBarContainerHeight, 50), {
    passive: true,
  });

  window.addEventListener('resize', throttle(navBarContainerHeight, 150), {
    passive: true,
  });
});
