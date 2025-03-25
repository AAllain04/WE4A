<?php include('../src/views/header.php');
?>

    <!-- Formulaire connexion -->
<body>
        <main class="form-signin w-100 m-auto">
            <form action="../src/moodle.php" method="get">
                <h1 class="h3 mb-3 fw-normal">Please connect</h1>

                <div class="form-floating position-relative">
                    <input
                            type="email"
                            class="form-control"
                            id="floatingInput"
                            placeholder="name@example.com"
                            required
                    >
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating position-relative">
                    <input
                            type="password"
                            class="form-control"
                            id="floatingPassword"
                            placeholder="Password"
                            required
                            minlength="5"
                    >
                    <label for="floatingPassword">Password</label>

                    <!-- Bouton pour afficher/masquer le mot de passe -->
                    <button
                            type="button"
                            class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 border-0"
                            aria-label="Toggle password visibility"
                            onclick="
                            const passwordInput = document.getElementById('floatingPassword');
                            this.innerHTML = passwordInput.type === 'password' ?
                                '<i class=\'bi bi-eye\'></i>' :
                                '<i class=\'bi bi-eye-slash\'></i>';
                            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
                        "
                    >
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>

                <div class="form-check text-start my-3">

                    <!-- A configurer lors de l'ajout de Symfony -->
                    <input
                            class="form-check-input"
                            type="checkbox"
                            value="remember-me"
                            id="flexCheckDefault"
                    >
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>

                <button
                        class="btn btn-primary w-100 py-2"
                        type="submit"
                >
                    Sign in
                </button>

                <p class="mt-5 mb-3 text-body-secondary">&copy; 2025–2025</p>
            </form>
        </main>
    <script src="./js/index.js" defer async></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Appliquer le style height:100% à html et body
            document.documentElement.setAttribute("style", "height: 100%;");
            document.body.setAttribute("style", "height: 100%;");
        });
    </script>


<?php include('../src/views/footer.php') ?>