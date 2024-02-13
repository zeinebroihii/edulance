<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageUserController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('home_page_user/index.html.twig', [
            'controller_name' => 'HomePageUserController',
        ]);
    }
}
