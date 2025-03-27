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
});