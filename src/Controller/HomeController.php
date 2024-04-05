<?php

namespace App\Controller;

use App\Classe\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $mail = new Mail();
        $mail->send(
            'sebzh29@outlook.com',
            'john odin',
            'Test mail',
            'Hello World'
        );

        return $this->render('home/index.html.twig');
    }
}
