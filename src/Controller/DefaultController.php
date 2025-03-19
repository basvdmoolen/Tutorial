<?php
namespace App\Controller;

// use App\Entity\User;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {
    #[Route('/home')]
    public function home() {
        //$roles = $this->getUser()->getRoles();

        //return $this->redirectToRoute('app_login');
        //return $this->render('pages/landingpage.html.twig');
        return $this->render('pages/landingpage.html.twig');
    }
}