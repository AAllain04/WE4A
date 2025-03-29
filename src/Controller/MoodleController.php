<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MoodleController extends AbstractController
{
    #[Route('/moodle', name: 'moodle')]
    public function index(): Response
    {
        return $this->render('moodle/index.html.twig', [
            'controller_name' => 'MoodleController',
        ]);
    }
}