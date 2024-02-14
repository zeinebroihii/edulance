<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageUserController extends AbstractController
{
    public function homepageuser(): Response
    {
        return $this->render('homePageUser.html.twig');

    }
}
