<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Ajouter  extends AbstractController permet d'utiliser les fichiers twig
 * Pour utiliser une propriété ou méthode dans une méthode en php
 *      $this->unePropriété = ...;
 *      $this->uneAutreMethode(...);
 * La méthode render (qui est retourné a l'appel de la fonction index)permet de 
 * Faire une requête sur une URI (donc renvoyer un chemin) 
 * @author 1050
 */
class AcceuilController extends AbstractController {
    /**
     * @Route("/", name="acceuil")
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/acceuil.html.twig");
    }
}
