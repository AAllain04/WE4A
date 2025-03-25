<?php include('../src/views/header.php') ?>

<?php include('../src/views/nav.php') ?>


    <body>
    <div class="page">
        <div class="contenu">
            <h2>Mes cours</h2>
            <h3>Vue d'ensemble des cours</h3>

            <hr>

            <input type="text" placeholder="Rechercher">

            <input list="trier" placeholder="Trier">
            <datalist id="trier">
                <option value="Alphabétique">
                <option value="Plus récent">
                <option value="Plus ancien">
            </datalist>

            <div class="clear"></div>

            <div class="cours">
                <img src="back1.png">
                <a href="moodle.html">Cours 1</a>
                <p>Descriptionzaevbrrvzqczdseee</p>
            </div>
            <div class="cours">
                <img src="back2.png">
                <a href="moodle.html">Cours 2</a>
                <p>Descriptionezvktklzd,zqm</p>
            </div>
            <div class="cours">
                <img src="back3.png">
                <a href="moodle.html">Cours 3</a>
                <p>Descriptionezvezvrdzqm</p>
            </div>

            <div class="clear"></div>

            <div class="cours">
                <img src="back2.png">
                <a href="moodle.html">Cours 4</a>
                <p>Descriptionzaevbrrvzqczdseee</p>
            </div>
            <div class="cours">
                <img src="back3.png">
                <a href="moodle.html">Cours 5</a>
                <p>Descriptionezvktklzd,zqm</p>
            </div>
            <div class="cours">
                <img src="back1.png">
                <a href="moodle.html">Cours 6</a>
                <p>Descriptionezvezvrdzqm</p>
            </div>

            <div class="clear"></div>

            <div class="cours">
                <img src="back3.png">
                <a href="moodle.html">Cours 7</a>
                <p>Descriptionzaevbrrvzqczdseee</p>
            </div>
            <div class="cours">
                <img src="back1.png">
                <a href="moodle.html">Cours 8</a>
                <p>Descriptionezvktklzd,zqm</p>
            </div>
            <div class="cours">
                <img src="back2.png">
                <a href="moodle.html">Cours 9</a>
                <p>Descriptionezvezvrdzqm</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Supprimer l'attribut style pour revenir aux styles par défaut
            document.documentElement.removeAttribute("style");
            document.body.removeAttribute("style");
        });
    </script>

<?php include('../src/views/footer.php') ?>