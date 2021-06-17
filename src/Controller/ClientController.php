<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends Controller
{
    /**
     * @Route("/client", name="client")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ClientController.php',
        ]);
    }
    /**
     * @Route("/", name="app_accueil")
     */
    public function Accueil(): Response
    {
        return $this->render('Accueil/Acceuil.html.twig');
    }
}
