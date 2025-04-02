<?php
// update_account.php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);
if (!$data) {
    echo json_encode(["error" => "Données invalides"]);
    exit;
}

// Simule une mise à jour
$response = [
    "success" => true,
    "message" => "Compte mis à jour",
    "data" => $data
];

echo json_encode($response);
