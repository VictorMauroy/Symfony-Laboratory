<?php

namespace App\Controller;

use App\Model\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ClientApiController extends AbstractController
{
    #[Route('/api/clients')]
    public function getCollection() : Response
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