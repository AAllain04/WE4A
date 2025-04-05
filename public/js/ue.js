// Gestion du modal UE
const ueModal = document.getElementById('ueModal');
const ueSpan = ueModal.getElementsByClassName("close")[0];

// Fermer le modal UE
ueSpan.onclick = function() {
  ueModal.style.display = "none";
}

// Bouton "Ajouter UE"
document.getElementById('addue').addEventListener('click', function() {
  document.getElementById('modalUeTitle').textContent = 'Créer une nouvelle UE';
  document.getElementById('ueForm').reset();
  document.getElementById('ueId').value = '';
  ueModal.style.display = "block";
});

// Boutons "Modifier UE"
document.querySelectorAll('.edit-ue').forEach(button => {
  button.addEventListener('click', function() {
    const ueId = this.getAttribute('data-id');
    const row = this.closest('tr');
    
    // Remplir le formulaire
    document.getElementById('modalUeTitle').textContent = 'Modifier l\'UE';
    document.getElementById('ueId').value = ueId;
    document.getElementById('ueCode').value = row.cells[0].textContent;
    document.getElementById('ueDescription').value = row.cells[1].textContent;
    document.getElementById('ueImage').value = row.cells[2].textContent;
    
    ueModal.style.display = "block";
  });
});

// Soumission du formulaire UE
document.getElementById('ueForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  const formData = new FormData(this);
  const ueId = formData.get('id');
  const isNewUe = ueId === '';
  const data = Object.fromEntries(formData.entries());
  
  try {
    const response = await fetch('../../src/ues.php', {
      method: isNewUe ? 'POST' : 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data)
    });
    
    const result = await response.json();
    
    if (response.ok) {
      alert(result.message);
      ueModal.style.display = "none";
      location.reload();
    } else {
      throw new Error(result.message || 'Erreur inconnue');
    }
  } catch (error) {
    alert('Erreur: ' + error.message);
  }
});