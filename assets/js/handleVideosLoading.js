export function videosLoadingPlaying() {
  const videos = document.querySelectorAll('.main__content-video');

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const video = entry.target;
          const sources = video.querySelectorAll('source[data-src]');

          sources.forEach((source) => {
            source.src = source.dataset.src;
          });

          video.load();

          video.addEventListener(
            'loadeddata',
            () => {
              video.classList.add('loaded');
              video.play();
            },
            { once: true }
          );

          obs.unobserve(video);
        }
      });
    },
    { threshold: 0.3 }
  );

  videos.forEach((video) => observer.observe(video));
}
