<?php include('../src/views/header.php') ?>
<?php include('../src/views/nav.php') ?>

<main class="container my-5">
    <h1 class="mb-4"><?= isset($post) ? 'Modifier un post' : 'Créer un nouveau post' ?></h1>
    
    <!-- Onglets pour choisir le type de post -->

    <!-- 
    "nav nav-tabs" : Classes Bootstrap pour créer une navigation par onglets
    "mb-4" : Marge basse de 4 unités (pour l'espacement)
    "id" : Identifiant unique pour le conteneur
    "role" : Attribut ARIA pour l'accessibilité (indique une liste d'onglets)
    -->
    <ul class="nav nav-tabs mb-4" id="postTypeTabs" role="tablist">
        
    <!-- Bouton de l'onglet (actif par défaut) -->
    <li class="nav-item" role="presentation">
            <button class="nav-link active" id="text-tab" data-bs-toggle="tab" data-bs-target="#text-post" type="button" role="tab" aria-controls="text-post" aria-selected="true">
                <i class="bi bi-chat-text"></i> Message texte
            </button>
        </li>

        <!-- Bouton de l'onglet (inactif par défaut) -->
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="file-tab" data-bs-toggle="tab" data-bs-target="#file-post" type="button" role="tab" aria-controls="file-post" aria-selected="false">
                <i class="bi bi-file-earmark-arrow-up"></i> Partage de fichier
            </button>
        </li>
    </ul>
    
    <!-- Contenu des onglets -->
    <div class="tab-content" id="postTypeContent">
        <!-- Onglet Message texte -->
        <div class="tab-pane fade show active" id="text-post" role="tabpanel" aria-labelledby="text-tab">
            <form id="textPostForm" action="/posts/create" method="POST" enctype="multipart/form-data">
            <!-- Champ caché pour identifier le type de post -->    
            <input type="hidden" name="post_type" value="text">
                
                <div class="mb-3">
                    <label for="textTitle" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="textTitle" name="title" required>
                </div>
                
                <!-- Sélecteur de Type de message -->
                <div class="mb-3">
                    <label for="textType" class="form-label">Type de message</label>
                    <select class="form-select" id="textType" name="message_type" required>
                        <option value="information">Information</option>
                        <option value="important">Important</option>
                        <option value="important">Annonce</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="textContent" class="form-label">Contenu</label>
                    <textarea class="form-control" id="textContent" name="content" rows="5" required></textarea>
                </div>
                
                <!-- Case à cocher pour épingler le post -->
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="pinTextPost" name="pinned">
                    <label class="form-check-label" for="pinTextPost">Épingler ce post</label>
                <!-- 
                  "pinned" : Nom qui sera envoyé avec la valeur "on" si coché
                  Fonctionnalité "nice to have" du cahier des charges
                -->
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <?= isset($post) ? 'Mettre à jour' : 'Publier' ?>
                    <!-- 
                  Condition PHP qui change le texte du bouton :
                  - "Mettre à jour" si on modifie un post existant ($post existe)
                  - "Publier" si on crée un nouveau post
                -->

                </button>
            </form>
        </div>
        
        <!-- Onglet Partage de fichier -->
        <div class="tab-pane fade" id="file-post" role="tabpanel" aria-labelledby="file-tab">
            <form id="filePostForm" action="/posts/create" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="post_type" value="file">
                
                <div class="mb-3">
                    <label for="fileTitle" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="fileTitle" name="title" required>
                </div>
                
                <div class="mb-3">
                    <label for="fileDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="fileDescription" name="description" rows="3" required></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="fileUpload" class="form-label">Fichier (ZIP uniquement)</label>
                    <input type="file" class="form-control" id="fileUpload" name="file" accept=".zip" required>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="pinFilePost" name="pinned">
                    <label class="form-check-label" for="pinFilePost">Épingler ce post</label>
                </div>
                
                <button type="submit" class="btn btn-primary"><?= isset($post) ? 'Mettre à jour' : 'Publier' ?></button>
            </form>
        </div>
    </div>
</main>

<script src="../public/js/post_ue.js" defer></script>
<?php include('../src/views/footer.php') ?>