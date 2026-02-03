export function delayedScrollToHash() {
  const hash = window.location.hash;

  if (!hash) return;

  const targetEl = document.querySelector(hash);
  if (!targetEl) return;

  // Delay scrolling to allow layout/styling to settle
  setTimeout(() => {
    const topOffset =
      parseInt(getComputedStyle(document.documentElement).scrollPaddingTop) ||
      0;
    const elementTop =
      targetEl.getBoundingClientRect().top + window.pageYOffset;

    window.scrollTo({
      top: elementTop - topOffset - 64,
      behavior: 'smooth',
    });
  }, 200); // Adjust delay if needed
}
