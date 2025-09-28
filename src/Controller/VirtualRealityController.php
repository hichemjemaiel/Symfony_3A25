<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VirtualRealityController extends AbstractController
{
    #[Route('/virtual', name: 'app_virtual_reality')]
    public function index(): Response
    {
        return $this->render('service/virtual-reality.html.twig');
    }
}
