<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class NumberController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 99);

        return new Response(
            '<html><body>Lucky number:' .$number. '</body></html>'
        );
    }
}
