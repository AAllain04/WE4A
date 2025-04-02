<?php include('../src/views/header.php') ?>
<?php include('../src/views/nav.php') ?>

<?php 

  $users = [
    ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Etudiant'],
    ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'Professeur'],
    ['id' => 3, 'name' => 'Albert Newton', 'email' => 'albert@example.com', 'role' => 'Administrateur'],
    ['id' => 4, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Etudiant'],
    ['id' => 5, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'Professeur'],
    ['id' => 6, 'name' => 'Albert Newton', 'email' => 'albert@example.com', 'role' => 'Administrateur'],
  ];
            
  $ues = [
    ['id' => 1, 'name' => 'Mathematiques', 'description' => 'Introduction aux mathématiques'],
    ['id' => 2, 'name' => 'Physique', 'description' => 'Cours de physique générale'],
    ['id' => 3, 'name' => 'Informatique', 'description' => 'Apprendre les bases de la programmation'],
    ['id' => 4, 'name' => 'Mathematiques', 'description' => 'Introduction aux mathématiques'],
    ['id' => 5, 'name' => 'Physique', 'description' => 'Cours de physique générale'],
    ['id' => 6, 'name' => 'Informatique', 'description' => 'Apprendre les bases de la programmation'],
  ];?>


<div class="page">
  <div class="contenu">
    <h2>Catalogue des utilisateurs et des UE</h2>

    <!-- Onglets pour Utilisateurs et UE -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="users-tab" data-bs-toggle="tab" role="tab" aria-controls="users" aria-selected="true">Utilisateurs</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="ue-tab" data-bs-toggle="tab" role="tab" aria-controls="ue" aria-selected="false">UE</a>
      </li>
    </ul>
    <div class="clear"></div>

    <div class="tab-content" id="myTabContent">
      <!-- Onglet Utilisateurs -->
      <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
        <h3>Liste des utilisateurs</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Rôle</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['role']) ?></td>
                <td class="editmodif">
                  <button class="btn btn-success btn-sm edit-user btn-custom" data-id="<?= $user['id'] ?>">Modifier</button>
                  <button class="btn btn-danger btn-sm delete-user btn-custom" data-id="<?= $user['id'] ?>">Supprimer</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Onglet UE -->
      <div class="tab-pane fade" id="ue" role="tabpanel" aria-labelledby="ue-tab">
        <h3>Liste des Unités d'Enseignement</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Nom de l'UE</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($ues as $ue): ?>
              <tr>
                <td><?= htmlspecialchars($ue['name']) ?></td>
                <td><?= htmlspecialchars($ue['description']) ?></td>
                <td class="editmodif">
                  <button class="btn btn-success btn-sm edit-ue btn-custom" data-id="<?= $ue['id'] ?>">Modifier</button>
                  <button class="btn btn-danger btn-sm delete-ue btn-custom" data-id="<?= $ue['id'] ?>">Supprimer</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal de confirmation de suppression -->
  <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Êtes-vous sûr de vouloir supprimer cet élément ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-danger" id="confirmDelete">Supprimer</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../public/js/admin.js" defer async></script>

  <?php include('../src/views/footer.php') ?>