<?php

session_start();
require_once 'db_config.php'; // Connexion à la base de données

header("Content-Type: application/json");

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo json_encode(["status" => "error", "message" => "Données manquantes"]);
    exit();
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Vérifier si l'utilisateur existe
$query = "SELECT * FROM user WHERE email = :email";
$stmt = $pdo->prepare($query);
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['userId'] = $user['email'];

    echo json_encode([
        "status" => "success",
        "userInfo" => [
            "firstname" => $user['firstname'],
            "name" => $user['name']
        ]
    ]);
} else {
    echo json_encode(["status" => "error", "message" => "Email ou mot de passe incorrect"]);
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Profil utilisateur</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script></head>
<body>
    <header>
        <!-- <?php include 'nav.php'; ?> -->
    </header>
    <main>
        <h1>Gestion de Compte</h1>
        <form id="profile-form" action="update_profile.php" method="post">
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" readonly required><br>

            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" readonly required><br>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password"><br>

            <button type="button" id="edit-btn" class="edit-btn">Modifier</button>
            <button type="submit" id="save-btn" class="save-btn" style="display: none;">Enregistrer</button>
        </form>
    </main>

    <script>
        $(document).ready(function() {
            // Charger les infos utilisateur
            $.ajax({
                type: "POST",
                url: "user.php",
                data: { email: localStorage.getItem("email"), password: localStorage.getItem("password") },
                success: function(response) {
                    if (response.status === "success") {
                        $("#firstname").val(response.userInfo.firstname);
                        $("#name").val(response.userInfo.name);
                    } else {
                        alert("Erreur de chargement des données.");
                    }
                }
            });

            // Activer l'édition du profil
            $("#edit-btn").click(function() {
                $("#firstname, #name").prop("readonly", false);
                $("#edit-btn").hide();
                $("#save-btn").show();
            });

            // Sauvegarde des modifications
            $("#profile-form").on("submit", function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: $(this).attr("action"),
                    data: formData,
                    success: function(response) {
                        alert("Profil mis à jour !");
                        $("#firstname, #name").prop("readonly", true);
                        $("#edit-btn").show();
                        $("#save-btn").hide();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
