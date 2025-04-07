<?php
session_start(); // Démarre la session

$error = ''; // Variable pour stocker les messages d'erreur

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification des identifiants
    if ($email === 'professor@example.com' && $password === 'password123') {
        $_SESSION['userRole'] = 'professor'; // Définit le rôle en tant que professeur
        header('Location: ../src/moodle.php'); // Redirection vers moodle.php
        exit(); // Arrête le script après la redirection
    } elseif ($email === 'student@example.com' && $password === 'password123') {
        $_SESSION['userRole'] = 'student'; // Définit le rôle en tant qu'étudiant
        header('Location: ../src/moodle.php'); // Redirection vers moodle.php
        exit(); // Arrête le script après la redirection
    } else {
        $error = 'Email ou mot de passe incorrect.'; // Message d'erreur si l'authentification échoue
    }
}
?>
<!-- MNL -->

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Moodle - Se connecter sur le site</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="form-signin w-100 mx-auto" style="max-width: 400px;">
            <!-- MNL= get=post -->
            <form action="index.php" method="post">

                <img alt="UTBM Logo" src="assets/logo.png">
                <div class="clear"></div>
                <h1 class="h3 mb-3 fw-normal text-center">Bienvenu sur le site de l'UTBM</h1>
                <div class="clear"></div>

                <!-- MNL -->
                <!-- Afficher un message d'erreur si nécessaire -->
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger text-center"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>

                <div class="form-floating position-relative">
                    <!-- <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required> -->
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating position-relative mt-3">
                    <!-- <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required minlength="5"> -->
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required minlength="5">
                    <label for="floatingPassword">Password</label>

                    <!-- Toggle password visibility -->
                     <!-- type="boutton" -->
                    <button type="submit" class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 border-0"
                            aria-label="Toggle password visibility"
                            onclick="
                                const passwordInput = document.getElementById('floatingPassword');
                                this.innerHTML = passwordInput.type === 'password' ?
                                    '<i class=\'bi bi-eye\'></i>' :
                                    '<i class=\'bi bi-eye-slash\'></i>';
                                passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit" >Sign in</button>
                <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2025</p>
            </form>
        </div>
    </div>
    <script src="./js/index.js" defer async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" async defer></script>
</body>
</html>

