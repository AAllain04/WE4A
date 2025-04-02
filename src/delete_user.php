<?php
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Récupérer l'ID de l'utilisateur à supprimer
    $userId = $_GET['id']; // On récupère l'ID via l'URL ou la méthode GET

    // Exemple de connexion à la base de données et suppression
    $pdo = new PDO('mysql:host=localhost;dbname=ta_base', 'utilisateur', 'motdepasse');
    $stmt = $pdo->prepare('DELETE FROM users WHERE id = :id');
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();

    // Répondre avec un JSON indiquant que la suppression a réussi
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Méthode de requête invalide']);
}
?>
