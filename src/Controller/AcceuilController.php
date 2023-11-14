<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Explication des bases :
 * La fonction index() retourne une Response. Pour se faire il faut ajouer le use Response.
 * Cette Response est un simple hello world dans ce cas.
 * Pour appeler cette fonction, on fait un commentaire normalisé /** enter 
 * Dans le commentaire @Route("/", name="acceuil")
 * l'annotation pour préciser que cette fonction est exécutée avec la route "/" qui correspond à l'url de base 
 *du site et à laquelle on donnera le nom "accueil" (ce qui permettra d'y accéder aussi par son nom) 
 *Et pour finir on appel le bon use (annotation Route) pour pouvoir utiliser @Route
 * @author 1050
 */
class AcceuilController {
    /**
     * @Route("/", name="acceuil")
     * @return Response
     */
    public function index(): Response{
        return new Response ('hello world >:)');
    }
}
