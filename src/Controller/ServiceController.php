<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route("/service/{name}", name : "serviceController")]
    public function showService($name) : Response{
        return new Response("servive ".$name) ;
    }

    #[Route("/service/t/{name}" , name : "sController")]
    public function showSer($name) : Response{
        return $this->render("/service/showService.html.twig",[
            'name' =>$name
        ]);
    }

    
    public function goToIndex() : Response{
        return $this->render("service/showService.html.twig",[
            "path" 
        ]);
    }
        
    }

