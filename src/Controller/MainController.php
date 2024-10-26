<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController 
{
    #[Route('/')]
    public function homepage() : Response
    {
        return new Response('<strong>You can add HTML code in there</strong> and your page will show it!');
        // In case you don't want to return html, you must switch the response type and the response content.
    }
}

