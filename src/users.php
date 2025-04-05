<?php
header('Content-Type: application/json');

// Simuler une base de données 
$users = [
    ['id' => 1, 'nom' => 'Dupont', 'prenom' => 'Jean', 'email' => 'jean@example.com', 'role' => 'admin', 'ues' => [1, 3]],
    ['id' => 2, 'nom' => 'Martin', 'prenom' => 'Marie', 'email' => 'marie@example.com', 'role' => 'user', 'ues' => [2, 4]]
];

$ues = [
    ['id' => 1, 'code' => 'MT3E', 'description' => 'Mathématiques avancés', 'image' => 'www'],
    ['id' => 2, 'code' => 'PS2', 'description' => 'Physique générale', 'image' => 'www'],
    ['id' => 3, 'code' => 'WE4A', 'description' => 'Programmation web', 'image' => 'www'],
    ['id' => 4, 'code' => 'IT4A', 'description' => 'Théorie des graphes', 'image' => 'www'],
    ['id' => 5, 'code' => 'LC00', 'description' => 'Chinois débutant', 'image' => 'www'],
    ['id' => 6, 'code' => 'PC40', 'description' => 'Parallel computing', 'image' => 'www'],
  ];

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

// Vérifier la méthode HTTP
if ($method === 'GET' && isset($_GET['action']) && $_GET['action'] === 'get_user') {
    // Retourner les données d'un utilisateur spécifique
    $userId = (int)$_GET['id'];
    $user = array_filter($users, function($u) use ($userId) {
        return $u['id'] === $userId;
    });
    echo json_encode(count($user) ? array_values($user)[0] : null);
    exit;
}
elseif ($method === 'POST') {
    // Création d'un nouvel utilisateur
    $newUser = [
        'id' => count($users) + 1,
        'nom' => htmlspecialchars($input['nom']),
        'prenom' => htmlspecialchars($input['prenom']),
        'email' => filter_var($input['email'], FILTER_SANITIZE_EMAIL),
        'role' => htmlspecialchars($input['role']),
        'ues' => $input['ues'] ?? [] // UE associées
    ];
    
    $users[] = $newUser;
    echo json_encode(['message' => 'Utilisateur créé avec succès', 'user' => $newUser]);
} 
elseif ($method === 'PUT') {
    // Modification d'un utilisateur existant
    $userId = (int)$input['id'];
    
    foreach ($users as &$user) {
        if ($user['id'] === $userId) {
            $user['nom'] = htmlspecialchars($input['nom']);
            $user['prenom'] = htmlspecialchars($input['prenom']);
            $user['email'] = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
            $user['role'] = htmlspecialchars($input['role']);
            $user['ues'] = $input['ues'] ?? [];
            break;
        }
    }
    
    echo json_encode(['message' => "Utilisateur $userId mis à jour avec succès"]);
} 
elseif ($method === 'GET' && isset($_GET['action']) && $_GET['action'] === 'get_ues') {
    // Retourner la liste des UE
    echo json_encode($allUes);
}
else {
    http_response_code(405);
    echo json_encode(['error' => 'Méthode non autorisée']);
}
?>