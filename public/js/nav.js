document.addEventListener("DOMContentLoaded", function () {
    const drawer = document.getElementById('drawer-1');
    const drawerBackdrop = document.getElementById('drawer-backdrop');
    const toggleBtn = document.getElementById('drawerToggle');
    const closeBtn = document.getElementById('drawerClose');

    // Toggle drawer
    function toggleDrawer() {
        const isOpen = drawer.classList.contains('show');
        drawer.classList.toggle('show', !isOpen);
        drawer.setAttribute("aria-hidden", isOpen ? "true" : "false");
        toggleBtn.setAttribute("aria-expanded", !isOpen);
        drawerBackdrop.classList.toggle('show', !isOpen);

    }

    toggleBtn.addEventListener('click', toggleDrawer);
    closeBtn.addEventListener('click', toggleDrawer);

    // Close drawer when clicking outside
    drawerBackdrop.addEventListener('click',toggleDrawer)
    drawer.addEventListener('click', function(event) {
        if (event.target === drawer) {
            toggleDrawer();
        }
    });

    function adjustNavbar() {
        const navbar = document.getElementById('navbar-items');
        const moreDropdown = document.getElementById('moreDropdown');
        const moreMenu = moreDropdown.querySelector('.dropdown-menu');

        // Reset previous adjustments
        while(moreMenu.children.length > 0) {
            navbar.insertBefore(moreMenu.children[0], moreDropdown);
        }

        // Move items to dropdown if they don't fit
        while(navbar.scrollWidth > navbar.clientWidth && navbar.children.length > 1) {
            const overflowItem = navbar.children[navbar.children.length - 2];
            moreMenu.insertBefore(overflowItem, moreMenu.firstChild);
        }

        // Toggle dropdown visibility
        moreDropdown.style.display = moreMenu.children.length ? 'block' : 'none';
    }

    window.addEventListener('resize', adjustNavbar);
    adjustNavbar();
});