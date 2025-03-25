<!DOCTYPE html>
<body>
<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Main Navigation">
    <div id="nav" class="container-fluid">
        <!-- Logo à gauche -->
        <a href="/" class="navbar-brand">
            <img alt="UTBM Logo" src="../../public/assets/logo_blanc.png" height="40">
        </a>

        <!-- Bouton pour ouvrir le drawer -->
        <button id="drawerToggle" class="btn navbar-toggler d-lg-none" type="button" aria-controls="drawer-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu de la navigation -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto" id="navbar-items">
                <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="/dashboard">Tableau de bord</a></li>
                <li class="nav-item"><a class="nav-link" href="/courses">Mes cours</a></li>
                <li class="nav-item"><a class="nav-link" href="/course-search">Recherche de cours</a></li>
                <li class="nav-item"><a class="nav-link" href="/utbm-sites">Sites UTBM</a></li>
                <li class="nav-item"><a class="nav-link" href="/semester">Semestre</a></li>
                <li class="nav-item"><a class="nav-link" href="/internships">Stages/S.E.E</a></li>

                <!-- Dropdown "Plus" -->
                <li class="nav-item dropdown" id="moreDropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="moreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Plus
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="moreDropdownLink"></ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Tiroir (drawer) -->
<div class="drawer drawer-left slide" tabindex="-1" role="dialog" aria-labelledby="drawer-1-title" aria-hidden="true" id="drawer-1">
    <div class="drawer-content drawer-content-scrollable" role="document">
        <div class="drawer-header p-3 d-flex justify-content-between align-items-center">
            <h4 class="drawer-title" id="drawer-1-title">Menu</h4>
            <button type="button" class="btn-close" id="drawerClose" aria-label="Close"></button>
        </div>
        <div class="drawer-body p-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="/profile">Profile</a></li>
                <li class="list-group-item"><a href="/dashboard">Tableau de bord</a></li>
                <li class="list-group-item"><a href="/courses">Mes cours</a></li>
                <li class="list-group-item"><a href="/course-search">Recherche de cours</a></li>
                <li class="list-group-item"><a href="/utbm-sites">Sites UTBM</a></li>
                <li class="list-group-item"><a href="/semester">Semestre</a></li>
                <li class="list-group-item"><a href="/internships">Stages/S.E.E</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const drawer = document.getElementById('drawer-1');
        const toggleBtn = document.getElementById('drawerToggle');
        const closeBtn = document.getElementById('drawerClose');

        // Toggle drawer
        function toggleDrawer() {
            const isOpen = drawer.classList.contains('show');
            drawer.classList.toggle('show', !isOpen);
            drawer.setAttribute("aria-hidden", isOpen ? "true" : "false");
            toggleBtn.setAttribute("aria-expanded", !isOpen);
        }

        toggleBtn.addEventListener('click', toggleDrawer);
        closeBtn.addEventListener('click', toggleDrawer);

        // Close drawer when clicking outside
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
</script>
