<?php include('../src/views/header.php') ?>
<?php include('../src/views/nav.php') ?>

<div class="page">
    <div class="contenu">
        <div class="container-fluid py-4">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="mb-3">Mes cours</h2>
                    <h3 class="text-muted mb-3">Vue d'ensemble des cours</h3>
                    <hr>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 col-md-6">
                    <div class="input-group">
                        <label for="search" aria-hidden="true"></label>
                        <input id="search" type="text" class="form-control" placeholder="🔍 Rechercher un cours">
                        <select id="sort" class="form-select" aria-label="Trier les cours">
                            <option selected>Trier par</option>
                            <option value="alphabetique">Alphabétique</option>
                            <option value="recent">Plus récent</option>
                            <option value="ancien">Plus ancien</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Conteneur Flex -->
            <div class="d-flex">
                <!-- Contenu principal (courses) -->
                <main class="flex-grow-1">
                    <div id="courses-container" class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
                        <?php
                            $courses = [
                                ['id' => 1, 'title' => 'Informatique', 'description' => 'Cours de programmation avancée', 'image' => '../public/assets/back1.png'],
                                ['id' => 2, 'title' => 'Mathématiques', 'description' => 'Algèbre linéaire et calcul', 'image' => '../public/assets/back2.png'],
                                ['id' => 3, 'title' => 'Design', 'description' => 'Principes de design graphique', 'image' => '../public/assets/back3.png'],
                                ['id' => 4, 'title' => 'Marketing', 'description' => 'Stratégies de communication', 'image' => '../public/assets/back2.png'],
                                ['id' => 5, 'title' => 'Langues', 'description' => 'Anglais professionnel', 'image' => '../public/assets/back3.png'],
                                ['id' => 6, 'title' => 'Gestion', 'description' => 'Management et leadership', 'image' => '../public/assets/back1.png']
                            ];

                            foreach ($courses as $course): ?>
                                <div class="col" data-course-title="<?= htmlspecialchars($course['title']) ?>">
                                    <div class="card h-100 shadow-sm">
                                        <img src="<?= htmlspecialchars($course['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($course['title']) ?>">
                                        <div class="card-body">
                                            <p class="card-title h5"><?= htmlspecialchars($course['title']) ?></p>

                                            <div class="d-flex justify-content-between align-items-center ">
                                                <p class="card-text text-muted"><?= htmlspecialchars($course['description']) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </main>

                <!-- Aside -->
                <aside class="ms-4" style="width: 320px;">
                    <script>
                        async function chargerActu(nbActu) {
                            const button = document.getElementById('plusActu');
                            if (button != null) { button.remove(); }

                            var AJAXresult = await fetch("actu.php?var=" + nbActu);
                            writearea = document.getElementById("Actualites");
                            writearea.innerHTML += await AJAXresult.text();
                        }

                        window.onload = () => chargerActu(0);
                    </script>

                    <div id="Actualites" class="center">
                        <!-- les posts seront écrits là par AJAX/fetch -->
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>


    <script src="../public/js/moodle.js" defer async></script>
<?php include('../src/views/footer.php') ?>