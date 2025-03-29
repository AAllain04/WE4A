<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(Request $request): Response
    {
        // Créer le formulaire de connexion
        $form = $this->createFormBuilder()
            ->add('username', TextType::class, [
                'label' => 'Nom d\'utilisateur',
                'attr' => ['placeholder' => 'Nom d\'utilisateur'],  // Ajouter un placeholder pour plus de confort
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => ['placeholder' => 'Mot de passe'],  // Ajouter un placeholder
            ])
            ->getForm();

        // Gérer la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $username = $data['username'];
            $password = $data['password'];

            // Simulation de la vérification du login
            if ($username === 'a' && $password === 'a') {
                return $this->redirectToRoute('moodle'); // Exemple de redirection en cas de succès
            } else {
                $this->addFlash('error', 'Nom d\'utilisateur ou mot de passe incorrect'); // Message d'erreur
            }
        }

        // Retourner la vue avec le formulaire
        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),  // Passer la vue du formulaire au template Twig
        ]);
    }
}
