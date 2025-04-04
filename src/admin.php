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
    ['id' => 1, 'code' => 'MT3E', 'description' => 'Mathématiques avancés', 'image' => 'www'],
    ['id' => 2, 'code' => 'PS2', 'description' => 'Physique générale', 'image' => 'www'],
    ['id' => 3, 'code' => 'WE4A', 'description' => 'Programmation web', 'image' => 'www'],
    ['id' => 4, 'code' => 'IT4A', 'description' => 'Théorie des graphes', 'image' => 'www'],
    ['id' => 5, 'code' => 'LC00', 'description' => 'Chinois débutant', 'image' => 'www'],
    ['id' => 6, 'code' => 'PC40', 'description' => 'Parallel computing', 'image' => 'www'],
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
                  <button class="btn btn-success btn-sm edit-user btn-custom" data-id="<?= $user['id'] ?>">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn btn-danger btn-sm delete-user btn-custom" data-id="<?= $user['id'] ?>">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <button class="btn btn-success mt-3" id="adduser">
          <i class="bi bi-plus-lg"></i>
        </button>
      </div>

      <!-- Formulaire modal user -->
      <div id="userModal" class="modal" style="display:none;">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2 id="modalTitle">Modifier un utilisateur</h2>
          <form id="userForm">
            <input type="hidden" id="userId" name="id" value="">
            
            <div class="form-group">
              <label for="name">Nom:</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="role">Rôle:</label>
              <select id="role" name="role" class="form-control" required>
                <option value="user">Utilisateur</option>
                <option value="admin">Administrateur</option>
                <option value="editor">Éditeur</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="password">Mot de passe:</label>
              <input type="password" id="password" name="password" class="form-control">
              <small id="passwordHelp" class="form-text text-muted">Laissez vide pour ne pas modifier</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
        </div>
      </div>

      <!-- Onglet UE -->
      <div class="tab-pane fade" id="ue" role="tabpanel" aria-labelledby="ue-tab">
        <h3>Liste des Unités d'Enseignement</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Code de l'UE</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($ues as $ue): ?>
              <tr>
                <td><?= htmlspecialchars($ue['code']) ?></td>
                <td><?= htmlspecialchars($ue['description']) ?></td>
                <td class="editmodif">
                  <button class="btn btn-success btn-sm edit-ue btn-custom" data-id="<?= $ue['id'] ?>">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn btn-danger btn-sm delete-ue btn-custom" data-id="<?= $ue['id'] ?>">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <button class="btn btn-success mt-3" id="addue">
          <i class="bi bi-plus-lg"></i>
        </button>
      </div>

      <!-- Formulaire modal pour ue -->
      <div id="ueModal" class="modal" style="display:none;">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2 id="modalUeTitle">Modifier une UE</h2>
          <form id="ueForm">
            <input type="hidden" id="ueId" name="id" value="">
            
            <div class="form-group">
              <label for="ueCode">Code UE:</label>
              <input type="text" id="ueCode" name="code" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="ueDescription">Description:</label>
              <textarea id="ueDescription" name="description" class="form-control" rows="3" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
        </div>
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
  <script src="../public/js/admin.js" defer></script>
  <script src="../public/js/user.js"></script>
  <script src="../public/js/ue.js"></script>

  <?php include('../src/views/footer.php') ?>