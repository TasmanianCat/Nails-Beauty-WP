export function delayedScrollToHash() {
  const hash = window.location.hash;
  if (!hash) return;

  // If browser supports scroll-margin-top, let CSS handle it
  if (CSS.supports('scroll-margin-top: 1px')) {
    return;
  }

  const targetEl = document.querySelector(hash);
  if (!targetEl) return;

  setTimeout(() => {
    const elementTop =
      targetEl.getBoundingClientRect().top + window.pageYOffset;

    window.scrollTo({
      top: elementTop - 64,
      behavior: 'smooth',
    });
  }, 200);
}
