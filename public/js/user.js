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

// Boutons "Modifier"
document.querySelectorAll('.edit-user').forEach(button => {
  button.addEventListener('click', function() {
    const userId = this.getAttribute('data-id');
    const row = this.closest('tr');
    
    // Remplir le formulaire
    document.getElementById('modalTitle').textContent = 'Modifier l\'utilisateur';
    document.getElementById('userId').value = userId;
    document.getElementById('name').value = row.cells[0].textContent;
    document.getElementById('email').value = row.cells[1].textContent;
    document.getElementById('role').value = row.cells[2].textContent.toLowerCase();
    document.getElementById('password').required = false;
    document.getElementById('passwordHelp').style.display = 'block';
    
    modal.style.display = "block";
  });
});

// Soumission du formulaire
document.getElementById('userForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  const formData = new FormData(this);
  const userId = formData.get('id');
  const isNewUser = userId === '';
  const data = Object.fromEntries(formData.entries());
  
  try {
    const response = await fetch('../../src/users.php', {
      method: isNewUser ? 'POST' : 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data)
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