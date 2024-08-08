<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class NameController extends AbstractController
{
    #[Route(path:'/api/hello/{name}', methods: ["GET"])]
    public function apiHello(string $name): JsonResponse
    {
        return $this->json([
            'name' => $name,
            'sympony' => 'rocks',
        ]);
    }
}
