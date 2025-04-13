<?php
// src/Controller/class ExampleController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class ExampleController
{
    #[Route('/example/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Random number: '.$number.'</body></html>'
        );
    }
}