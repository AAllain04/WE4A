<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    // Route pour afficher la page d'administration
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Simuler des données pour les utilisateurs et les UE
        $users = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Etudiant'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'Professeur'],
            ['id' => 3, 'name' => 'Albert Newton', 'email' => 'albert@example.com', 'role' => 'Administrateur'],
            ['id' => 4, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Etudiant'],
            ['id' => 5, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'Professeur'],
            ['id' => 6, 'name' => 'Albert Newton', 'email' => 'albert@example.com', 'role' => 'Administrateur'],
        ];

        $ues = [
            ['id' => 1, 'name' => 'Mathematiques', 'description' => 'Introduction aux mathématiques'],
            ['id' => 2, 'name' => 'Physique', 'description' => 'Cours de physique générale'],
            ['id' => 3, 'name' => 'Informatique', 'description' => 'Apprendre les bases de la programmation'],
            ['id' => 4, 'name' => 'Mathematiques', 'description' => 'Introduction aux mathématiques'],
            ['id' => 5, 'name' => 'Physique', 'description' => 'Cours de physique générale'],
            ['id' => 6, 'name' => 'Informatique', 'description' => 'Apprendre les bases de la programmation'],
        ];

        // Rendre la vue avec les données simulées
        return $this->render('admin/catalogue.html.twig', [
            'users' => $users,
            'ues' => $ues,
        ]);
    }
}