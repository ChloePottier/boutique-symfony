<?php

namespace App\Controller;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        //recherche tous les articles (les mettre dans un tableau) where...
        $products = $this->getDoctrine()->getRepository(Product::class)->findBy(
            //recherche les articles qui sont publiés
            ['isPublished' => 'true'],
            // orderby publicationDate -> décroissant
        );
        // retourne l'index avec les articles
        return $this->render('index/index.html.twig', ['products' => $products]);
        // return $this->render('index/index.html.twig', [
        //     'controller_name' => 'IndexController',
        // ]);
    }
}
