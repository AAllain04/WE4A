// Script pour gérer la soumission des formulaires en AJAX
/* document.addEventListener('DOMContentLoaded', function() {
    // Gestion des formulaires
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = '/ue/' + data.ue_id;
                } else {
                    alert('Erreur: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Une erreur est survenue');
            });
        });
    });
}); */


// Gestion des formulaires de création/modification de posts :

document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM (Document Object Model)
    const textPostForm = document.getElementById('textPostForm');
    const filePostForm = document.getElementById('filePostForm');
    const fileUploadInput = document.getElementById('fileUpload');
    const textContent = document.getElementById('textContent');
    const postTypeTabs = document.getElementById('postTypeTabs');
    
    // Variables d'état
    let currentPostType = 'text'; // Stocke l'onglet actif (par défaut 'text')
    
    // Changement d'onglet
    postTypeTabs.addEventListener('click', function(e) {
        // Cliquer sur un onglet met à jour l'onglet actif
        if (e.target && e.target.matches('button.nav-link')) {
            currentPostType = e.target.id.split('-')[0]; // 'text' ou 'file'
        }
    });
    
    // Validation du formulaire texte
    if (textPostForm) {
        textPostForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation supplémentaire
            if (textContent.value.trim().length < 10) { // trim(): supprime les espaces avant et après la chaîne de caractères
                showAlert('Le contenu doit faire au moins 10 caractères', 'danger');
                return;
            }
            
            submitForm(this);
        });
    }
    
    // Validation du formulaire fichier
    if (filePostForm) {
        filePostForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Empêche le rechargement classique de la page lors de la soumission
                                // Permet de traiter le formulaire JS sans quitter la page
            
            // Validation du fichier
            if (fileUploadInput.files.length > 0) {
                const file = fileUploadInput.files[0];
                const fileType = file.type;
                const fileSize = file.size; // en bytes
                
                if (fileType !== 'application/zip') {
                    showAlert('Seuls les fichiers ZIP sont acceptés', 'danger');
                    return;
                }
                
                if (fileSize > 5 * 1024 * 1024) { // 5MB max
                    showAlert('Le fichier ne doit pas dépasser 5MB', 'danger');
                    return;
                }
            }
            
            submitForm(this);
        });
    }
    
    // Fonction générique pour soumettre un formulaire
    function submitForm(form) {
        const formData = new FormData(form);
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        
        // Désactiver le bouton pendant l'envoi
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Envoi en cours...';
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest' // Pour identifier les requêtes AJAX côté serveur
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur réseau');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                showAlert(data.message || 'Post enregistré avec succès!', 'success');
                
                // Redirection après un court délai
                setTimeout(() => {
                    window.location.href = data.redirect_url || '/ue/' + data.ue_id;
                }, 1500);
            } else {
                throw new Error(data.message || 'Erreur lors de l\'enregistrement');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showAlert(error.message || 'Une erreur est survenue', 'danger');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
        });
    }
    
    // Afficher une alerte stylisée
    function showAlert(message, type) {
        // Supprimer les alertes existantes
        const existingAlerts = document.querySelectorAll('.custom-alert');
        existingAlerts.forEach(alert => alert.remove());
        
        const alertDiv = document.createElement('div');
        alertDiv.className = `custom-alert alert alert-${type} alert-dismissible fade show`;
        alertDiv.setAttribute('role', 'alert');
        alertDiv.style.position = 'fixed';
        alertDiv.style.top = '20px';
        alertDiv.style.right = '20px';
        alertDiv.style.zIndex = '1000';
        
        alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        
        document.body.appendChild(alertDiv);
        
        // Disparaît automatiquement après 5 secondes
        setTimeout(() => {
            alertDiv.classList.remove('show');
            setTimeout(() => alertDiv.remove(), 150);
        }, 5000);
    }
    
    // Compteur de caractères pour le contenu texte
    if (textContent) {
        const charCounter = document.createElement('small');
        charCounter.className = 'text-muted d-block text-end';
        charCounter.textContent = '0/2000 caractères';
        textContent.parentNode.insertBefore(charCounter, textContent.nextSibling);
        
        textContent.addEventListener('input', function() {
            const currentLength = this.value.length;
            charCounter.textContent = `${currentLength}/2000 caractères`;
            
            if (currentLength > 2000) {
                charCounter.classList.add('text-danger');
            } else {
                charCounter.classList.remove('text-danger');
            }
        });
    }
    
    // Aperçu du nom de fichier pour le téléchargement
    if (fileUploadInput) {
        const fileInfo = document.createElement('small');
        fileInfo.className = 'text-muted d-block mt-1';
        fileUploadInput.parentNode.appendChild(fileInfo);
        
        fileUploadInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                fileInfo.textContent = `Fichier sélectionné: ${this.files[0].name}`;
            } else {
                fileInfo.textContent = '';
            }
        });
    }
});