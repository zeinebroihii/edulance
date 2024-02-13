<?php
// src/Controller/SignupController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    /**
     * @Route("/signup", name="signup")
     */
    public function signup(): Response
    {
        return $this->render('signup.html.twig');
    }
}
