<?php
header('Content-Type: application/json');

// Simuler une base de données 
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
if ($method === 'POST') {
    // Création d'un nouvel utilisateur
    $newUE = [
        'id' => count($ues) + 1,
        'code' => htmlspecialchars($input['code']),
        'description' => filter_var($input['description']),
        'image' => htmlspecialchars($input['image'])
    ];
    
    echo json_encode(['message' => 'UE créé avec succès', 'ue' => $newUE]);
} elseif ($method === 'PUT') {
    // Modification d'un utilisateur existant
    $ueId = (int)$input['id'];
    
    // Mettre à jour l'utilisateur
    echo json_encode(['message' => "UE $ueId mis à jour avec succès"]);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Méthode non autorisée']);
}
?>