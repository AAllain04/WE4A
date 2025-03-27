<?php include('../src/views/header.php') ?>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-signin w-100 mx-auto" style="max-width: 400px;">
        <form action="../src/moodle.php" method="get">
            <h1 class="h3 mb-3 fw-normal text-center">Please connect</h1>

            <div class="form-floating position-relative">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating position-relative mt-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required minlength="5">
                <label for="floatingPassword">Password</label>

                <!-- Toggle password visibility -->
                <button type="button" class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 border-0"
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

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2025</p>
        </form>
    </div>
</div>
<script src="./js/index.js" defer async></script>
<?php include('../src/views/footer.php') ?>
