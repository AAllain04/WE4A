// Sélectionner tous les onglets
const tabs = document.querySelectorAll('.nav-link');

// Ajouter un événement sur chaque onglet
tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    // Supprimer la classe active de tous les onglets
    tabs.forEach(t => t.classList.remove('active'));
    
    // Ajouter la classe active à l'onglet sélectionné
    tab.classList.add('active');
    
    // Masquer toutes les sections
    const tabContent = document.querySelectorAll('.tab-pane');
    tabContent.forEach(content => content.classList.remove('show', 'active'));

    // Afficher la section correspondante à l'onglet cliqué
    const activeTabContent = document.querySelector(`#${tab.id.replace('-tab', '')}`);
    activeTabContent.classList.add('show', 'active');
  });
});

document.addEventListener('DOMContentLoaded', function () {
  let deleteButton = null;
  let deleteType = ''; // Pour savoir si on supprime un utilisateur ou une UE
  let deleteId = null;

  // Événements de suppression pour les utilisateurs et les UE
  document.querySelectorAll('.delete-user').forEach(button => {
    button.addEventListener('click', function () {
      deleteButton = button;
      deleteType = 'user'; // Indique que c'est un utilisateur
      deleteId = button.getAttribute('data-id');
      showConfirmationModal();
    });
  });

  document.querySelectorAll('.delete-ue').forEach(button => {
    button.addEventListener('click', function () {
      deleteButton = button;
      deleteType = 'ue'; // Indique que c'est une UE
      deleteId = button.getAttribute('data-id');
      showConfirmationModal();
    });
  });

  // Afficher la modal de confirmation
  function showConfirmationModal() {
    const modal = new bootstrap.Modal(document.getElementById('confirmModal'));
    modal.show();
  }

  // Lorsque l'utilisateur clique sur "Supprimer" dans le modal
  document.getElementById('confirmDelete').addEventListener('click', function () {
    const url = deleteType === 'user' ? `delete_user.php?id=${deleteId}` : `delete_ue.php?id=${deleteId}`;

    fetch(url, {
      method: 'DELETE', // Suppression via une requête DELETE
      headers: {
        'Content-Type': 'application/json',
      },
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Suppression réussie, enlever l'élément de la page sans recharger
        deleteButton.closest('tr').remove();
        const modal = bootstrap.Modal.getInstance(document.getElementById('confirmModal'));
        modal.hide(); // Fermer le modal
      } else {
        alert('Erreur lors de la suppression');
      }
    })
    .catch(error => {
      console.error('Erreur:', error);
      alert('Une erreur s\'est produite');
    });
  });
});