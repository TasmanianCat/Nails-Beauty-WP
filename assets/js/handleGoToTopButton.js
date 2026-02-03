export function initGoToTop() {
  const progressWrap = document.querySelector('.progress-wrap');
  const path = progressWrap?.querySelector('path');

  if (!progressWrap || !path) return;

  const pathLength = path.getTotalLength();
  path.style.strokeDasharray = pathLength;
  path.style.strokeDashoffset = pathLength;

  const updateProgress = () => {
    const scroll = window.scrollY;
    const height = document.documentElement.scrollHeight - window.innerHeight;
    const progress = pathLength - (scroll * pathLength) / height;
    path.style.strokeDashoffset = progress;

    progressWrap.classList.toggle('active', scroll > 100);
  };

  updateProgress();
  window.addEventListener('scroll', updateProgress);

  progressWrap.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  progressWrap.addEventListener('keypress', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  });
}
