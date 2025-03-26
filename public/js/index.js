document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const passwordInput = document.getElementById('floatingPassword');

    // Ajouter dynamiquement le bouton de visibilité du mot de passe
    const passwordWrapper = passwordInput.closest('.form-floating');
    const toggleButton = document.createElement('button');
    toggleButton.type = 'button';
    toggleButton.className = 'btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2 border-0';
    toggleButton.setAttribute('aria-label', 'Toggle password visibility');

    const toggleIcon = document.createElement('i');
    toggleIcon.className = 'bi bi-eye-slash';
    toggleButton.appendChild(toggleIcon);

    // Insérer le bouton à côté du champ de mot de passe
    passwordWrapper.appendChild(toggleButton);

    // Gestion de la visibilité du mot de passe
    toggleButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.className = 'bi bi-eye';
        } else {
            passwordInput.type = 'password';
            toggleIcon.className = 'bi bi-eye-slash';
        }
    });

    // Validation du formulaire
    form.addEventListener('submit', function(event) {
        if (!passwordInput.checkValidity()) {
            event.preventDefault();
            passwordInput.classList.add('is-invalid');

            // Créer ou mettre à jour le message d'erreur
            let errorMessage = passwordInput.nextElementSibling;
            if (!errorMessage || !errorMessage.classList.contains('invalid-feedback')) {
                errorMessage = document.createElement('div');
                errorMessage.classList.add('invalid-feedback');
                passwordInput.parentNode.appendChild(errorMessage);
            }
            errorMessage.textContent = 'Le mot de passe doit contenir au moins 5 caractères.';
        }
    });

    // Réinitialiser la validation à chaque modification
    passwordInput.addEventListener('input', function() {
        this.classList.remove('is-invalid');
        const errorMessage = this.nextElementSibling;
        if (errorMessage && errorMessage.classList.contains('invalid-feedback')) {
            errorMessage.remove();
        }
    });
});
// html et body conf
document.addEventListener("DOMContentLoaded", function () {
    // Appliquer le style height:100% à html et body
    document.documentElement.setAttribute("style", "height: 100%;");
    document.body.setAttribute("style", "height: 100%;");
});