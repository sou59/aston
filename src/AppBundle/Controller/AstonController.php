<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class AstonController extends Controller {

    /**
     * @Route("/aston", name="aston")
     */
    public function astonAction() {
        return $this->render("default/aston.html.twig", ['prenom'=>'Souad']);
    }

    /**
     * @Route("/blog/{page}", name="blog", requirements={"page"="\d+"})
     */
    public function blogAction($page) {
        return $this->render('default/blog.html.twig', ['page'=>$page]);
    }
}