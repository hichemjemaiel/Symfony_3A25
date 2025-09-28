<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RtlController extends AbstractController
{
    #[Route('/rtl', name: 'app_rtl')]
    public function index(): Response
    {
        return $this->render('service/rtl.html.twig');
    }
}
