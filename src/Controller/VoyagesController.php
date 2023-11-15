<?php
namespace App\Controller;

use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of VoyagesController
 *
 * @author 1050
 */
class VoyagesController extends AbstractController {
    private VisiteRepository $repository;
    /**
     * @Route("/voyages", name="voyages")
     * @return Response
     */
    public function index():Response{
        $visites = $this-> repository->findAll();
        return $this->render("pages/voyages.html.twig",[
           'cleVisite'=>$visites 
        ]);
    }
    public function __construct(VisiteRepository $unRepository) {
        $this->repository = $unRepository;
    }
}
