<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Main Navigation">
    <div id="nav" class="container-fluid">
        <!-- Logo à gauche -->
        <a id="utbmlogo" class="navbar-brand align-items-center m-0 mr-4 p-0 d-md-flex">
            <img alt="UTBM Logo" src="../public/assets/logo_blanc.png">
        </a>

        <div class="clear"></div>

        <!-- Bouton pour ouvrir le drawer -->
        <button id="drawerToggle" class="btn navbar-toggler d-lg-none" type="button" aria-controls="drawer-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu de la navigation -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto" id="navbar-items">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../moodle.php" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mon Compte
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="accountDropdown">
                        <form id="accountForm">
                            <div class="mb-2">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" id="userLastName" value="">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="userFirstName" value="">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control" id="userPassword">
                            </div>
                            <button type="button" class="btn btn-primary w-100" id="saveAccount">Sauvegarder</button>
                        </form>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="moodle.php">Tableau de bord</a></li>
                <li class="nav-item"><a class="nav-link" href="moodle.php">Mes cours</a></li>
                <li class="nav-item"><a class="nav-link" href="moodle.php">Sites UTBM</a></li>
                <li class="nav-item"><a class="nav-link" href="moodle.php">Stages/S.E.E</a></li>
                <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
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
                <li class="list-group-item"><a class="text-decoration-none text-body-secondary" href="moodle.php">Tableau de bord</a></li>
                <li class="list-group-item"><a class="text-decoration-none text-body-secondary" href="moodle.php">Mes cours</a></li>
                <li class="list-group-item"><a class="text-decoration-none text-body-secondary" href="moodle.php">Sites UTBM</a></li>
                <li class="list-group-item"><a class="text-decoration-none text-body-secondary" href="moodle.php">Stages/S.E.E</a></li>
                <li class="list-group-item"><a class="text-decoration-none text-body-secondary" href="admin.php">Admin</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="drawer-backdrop" class="modal-backdrop fade"></div>

<script src="../public/js/nav.js" defer></script>
