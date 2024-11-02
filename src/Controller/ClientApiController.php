<?php

namespace App\Controller;

use App\Model\Client;
use App\Repository\ClientRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ClientApiController extends AbstractController
{
    #[Route('/api/clients')]
    public function getCollection(ClientRepository $clientRepo) : Response
    {
        # dd($loggerInterface); // Add a special interface for debugging in the browser.

        //dd($clientRepo);

        $clients = $clientRepo->findAll();

                # Turn your object into json:
        
        ## The classic way:
        # return new Response(json_encode($clients));

        ## Better way
        return $this->json($clients); //Cannot work with objects that contains private properties.
    }
}