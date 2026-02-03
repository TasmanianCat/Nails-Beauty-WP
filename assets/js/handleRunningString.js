export function handleRunningString() {
  const runningString = document.querySelector(
    '.main__content-running-string-items'
  );
  if (!runningString) return;

  let isInView = false;
  let isTabVisible = !document.hidden;

  // ✅ Function to update animation state
  function updatePlayState() {
    if (isInView && isTabVisible) {
      runningString.style.animationPlayState = 'running';
    } else {
      runningString.style.animationPlayState = 'paused';
    }
  }

  // ✅ Viewport observer
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        isInView = entry.isIntersecting;
        updatePlayState();
      });
    },
    { threshold: 0.1 }
  );

  observer.observe(runningString);

  // ✅ Tab visibility change handler
  document.addEventListener('visibilitychange', () => {
    isTabVisible = !document.hidden;
    updatePlayState();
  });

  // ✅ Initial check
  updatePlayState();
}
