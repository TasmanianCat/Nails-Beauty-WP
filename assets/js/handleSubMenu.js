let submenuInitialized = false;

export function closeAllSubmenus() {
  document
    .querySelectorAll('.menu-item-has-children.submenu-open')
    .forEach((item) => item.classList.remove('submenu-open'));
}

export function handleSubMenu() {
  if (submenuInitialized) return;
  submenuInitialized = true;

  const menuLinks = document.querySelectorAll('.menu-item-has-children > a');

  if (!menuLinks.length) {
    // console.warn('handleSubMenu: no submenu links found');
    submenuInitialized = false;
    return;
  }

  closeAllSubmenus();

  menuLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      const parent = link.parentElement;

      if (parent.classList.contains('submenu-open')) return;

      e.preventDefault();

      parent.parentElement
        .querySelectorAll('.menu-item-has-children')
        .forEach((item) => {
          if (item !== parent) item.classList.remove('submenu-open');
        });

      parent.classList.add('submenu-open');
    });
  });

  // outside click — attach ONCE
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.navigation')) {
      closeAllSubmenus();
    }
  });

  window.addEventListener('pageshow', closeAllSubmenus);
}
