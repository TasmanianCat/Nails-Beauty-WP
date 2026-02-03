export function closeAllSubmenus() {
  // Select all open submenus at any depth
  const openSubmenus = document.querySelectorAll(
    '.submenu, .submenu-active, .submenu-open'
  );

  openSubmenus.forEach((submenu) => {
    submenu.classList.remove('submenu-active', 'submenu-open', 'show-submenu');
    submenu.style.display = ''; // reset inline styles if used
  });

  // Also remove any "active" classes from parent menu items
  const activeParents = document.querySelectorAll(
    '.menu-item-active, .has-open-submenu'
  );

  activeParents.forEach((item) => {
    item.classList.remove('menu-item-active', 'has-open-submenu');
  });
}

// 🔹 Function to handle submenu behavior
export function handleSubMenu() {
  const menuLinks = document.querySelectorAll('.menu-item-has-children > a');

  // Reset submenus initially
  closeAllSubmenus();

  // Reset again on DOM ready
  document.addEventListener('DOMContentLoaded', closeAllSubmenus);

  // Reset again when using browser back/forward
  window.addEventListener('pageshow', closeAllSubmenus);

  // Add click handlers for each link
  menuLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      const parent = link.parentElement;

      // If already open, allow navigation
      if (parent.classList.contains('submenu-open')) return true;

      // Prevent navigation first time
      e.preventDefault();

      // Close siblings at the same level
      const siblings = parent.parentElement.querySelectorAll(
        '.menu-item-has-children'
      );
      siblings.forEach((sibling) => {
        if (sibling !== parent) sibling.classList.remove('submenu-open');
      });

      // Open this submenu
      parent.classList.add('submenu-open');
    });
  });

  // Close all submenus when clicking outside the navigation
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.navigation')) {
      closeAllSubmenus();
    }
  });
}
