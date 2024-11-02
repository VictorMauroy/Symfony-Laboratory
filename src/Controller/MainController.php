<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(ClientRepository $clientRepo) : Response
    {
        //return new Response('<strong>You can add HTML code in there</strong> and your page will show it!');
        // In case you don't want to return html, you must switch the response type and the response content.

        $clients = $clientRepo->findAll();
        $clientCount = count($clients);

        return $this->render('main/homepage.html.twig', [
            'clients' => $clients,
            'count' => $clientCount
        ]);
    }
}

