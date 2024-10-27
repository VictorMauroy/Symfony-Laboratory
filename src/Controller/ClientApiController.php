<?php

namespace App\Controller;

use App\Model\Client;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ClientApiController extends AbstractController
{
    #[Route('/api/clients')]
    public function getCollection(LoggerInterface $loggerInterface) : Response
    {
        # Lazy way to define clients.
        /* $clients = [
            [
                'name' => 'Grey',
                'firstname' => 'Stephany',
                'email' => 'grey-steph@mail.fr'
            ],
            [
                'name' => 'Doorn',
                'firstname' => 'Jake',
                'email' => 'jake-doorn@mail.com'
            ],
            [
                'name' => 'Sealed',
                'firstname' => 'Sully',
                'email' => 'sullysea@zmail.fr'
            ],
        ]; */

        # dd($loggerInterface); // Add a special interface for debugging in the browser.

        $clients = [
            new Client(
                0,
                'Grey',
                'Stephany',
                'grey-steph@mail.fr'
            ),
            new Client(
                1,
                'Doorn',
                'Jake',
                'jake-doorn@mail.com'
            ),
            new Client(
                2,
                'Sealed',
                'Sully',
                'sullysea@zmail.fr'
            ),
        ];

                # Turn your object into json:
        
        ## The classic way:
        # return new Response(json_encode($clients));

        ## Better way
        return $this->json($clients); //Cannot work with objects that contains private properties.
    }
}