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
