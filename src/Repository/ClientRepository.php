<?php 

namespace App\Repository;

use App\Model\Client;
use Psr\Log\LoggerInterface;

class ClientRepository 
{
    public function __construct(private LoggerInterface $logger)
    {
        
    }

    public function findAll() : array 
    {
        # dd($loggerInterface); // Add a special interface for debugging in the browser.
        $this->logger->info("Client collection retrieved");

        $clients = [
            new Client(
                0,
                'Grey',
                'Stephany',
                'grey-steph@mail.fr',
            ),
            new Client(
                1,
                'Doorn',
                'Jake',
                'jake-doorn@mail.com',
            ),
            new Client(
                2,
                'Sealed',
                'Sully',
                'sullysea@zmail.fr',
            ),
        ];

        return $clients;
    }
}