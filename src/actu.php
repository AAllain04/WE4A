<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    $nbActu = $_GET["var"];

    $posts = [
        ["nom_ue" => "Mathématiques", "content" => "Cours sur les équations différentielles", "type" => "Cours"],
        ["nom_ue" => "Physique", "content" => "Introduction à la mécanique quantique", "type" => "Cours"],
        ["nom_ue" => "Informatique", "content" => "Programmation en C avancée", "type" => "TP"],
        ["nom_ue" => "Électronique", "content" => "Circuits logiques et transistors", "type" => "Cours"],
        ["nom_ue" => "Management", "content" => "Stratégies d'entreprise", "type" => "Séminaire"],
        ["nom_ue" => "Chimie", "content" => "Réactions acido-basiques", "type" => "Cours"],
        ["nom_ue" => "Anglais", "content" => "Techniques de communication", "type" => "TD"],
        ["nom_ue" => "Économie", "content" => "Microéconomie et marché", "type" => "Cours"],
        ["nom_ue" => "Mathématiques", "content" => "Algèbre linéaire", "type" => "Cours"],
        ["nom_ue" => "Physique", "content" => "Optique géométrique", "type" => "TP"]
    ];

    $limit = 3;

    // Sélectionne les posts à afficher en fonction de l'offset ($nbActu)
    $selected_posts = array_slice($posts, $nbActu, $limit);

    if (!empty($selected_posts)) {
      foreach ($selected_posts as $post) {
          echo "<div class='post'>";
          echo "<h3>{$post['nom_ue']} ({$post['type']})</h3>";
          echo "<p>{$post['content']}</p>";
          echo "</div>";
      }
  
      // Ajouter un bouton "Charger plus" si des posts restent
      if ($nbActu + $limit < count($posts)) {
          echo "<div id='plusActu' class='center'>";
          echo "<button type='button' onclick='chargerActu(" . ($nbActu + $limit) . ")'>Charger plus de Posts</button>";
          echo "</div>";
      }
  }
?>