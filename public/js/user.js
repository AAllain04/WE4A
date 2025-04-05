const modal = document.getElementById('userModal');
const span = document.getElementsByClassName("close")[0];

// Fermer le modal
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Bouton "Ajouter"
document.getElementById('adduser').addEventListener('click', function() {
  document.getElementById('modalTitle').textContent = 'Créer un nouvel utilisateur';
  document.getElementById('userForm').reset();
  document.getElementById('userId').value = '';
  document.getElementById('password').required = true;
  document.getElementById('passwordHelp').style.display = 'none';
  modal.style.display = "block";
});

// Bouton modifier
document.querySelectorAll('.edit-user').forEach(button => {
  button.addEventListener('click', function() {
    const userId = this.getAttribute('data-id');
    const row = this.closest('tr');
    
    // Remplissage basique du formulaire
    document.getElementById('modalTitle').textContent = 'Modifier l\'utilisateur';
    document.getElementById('userId').value = userId;
    document.getElementById('nom').value = row.cells[0].textContent;
    document.getElementById('prenom').value = row.cells[1].textContent; // Adaptez l'index si nécessaire
    document.getElementById('email').value = row.cells[2].textContent;
    
    // Gestion du mot de passe
    document.getElementById('password').required = false;
    document.getElementById('passwordHelp').style.display = 'block';
    
    // Ouvrir le modal (méthode garantie)
    const modal = document.getElementById('userModal');
    modal.style.display = "block";
    modal.style.visibility = "visible";
    modal.style.opacity = 1;
  });
});

// Soumission du formulaire
document.getElementById('userForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  // Récupérer les UE sélectionnées
  const selectedUes = [];
  document.querySelectorAll('input[nom="ues[]"]:checked').forEach(checkbox => {
    selectedUes.push(parseInt(checkbox.value));
  });

  // Préparer les données
  const formData = {
    id: document.getElementById('userId').value,
    nom: document.getElementById('nom').value,
    prenom: document.getElementById('prenom').value,
    email: document.getElementById('email').value,
    role: document.getElementById('role').value,
    password: document.getElementById('password').value,
    ues: selectedUes // Ajout des UE sélectionnées
  };
  
  try {
    const response = await fetch('../../src/users.php', {
      method: formData.id ? 'POST' : 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formData)
    });
    
    const result = await response.json();
    
    if (response.ok) {
      alert(result.message);
      modal.style.display = "none";
      location.reload();
    } else {
      throw new Error(result.message || 'Erreur inconnue');
    }
  } catch (error) {
    alert('Erreur: ' + error.message);
  }
});