<?php
header('Content-Type: application/json');

// Simuler une base de données 
$users = [
    ['id' => 1, 'name' => 'Jean Dupont', 'email' => 'jean@example.com', 'role' => 'admin'],
    ['id' => 2, 'name' => 'Marie Martin', 'email' => 'marie@example.com', 'role' => 'user']
];

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

// Vérifier la méthode HTTP
if ($method === 'POST') {
    // Création d'un nouvel utilisateur
    $newUser = [
        'id' => count($users) + 1,
        'name' => htmlspecialchars($input['name']),
        'email' => filter_var($input['email'], FILTER_SANITIZE_EMAIL),
        'role' => htmlspecialchars($input['role'])
    ];
    
    echo json_encode(['message' => 'Utilisateur créé avec succès', 'user' => $newUser]);
} elseif ($method === 'PUT') {
    // Modification d'un utilisateur existant
    $userId = (int)$input['id'];
    
    // Mettre à jour l'utilisateur
    echo json_encode(['message' => "Utilisateur $userId mis à jour avec succès"]);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Méthode non autorisée']);
}
?>