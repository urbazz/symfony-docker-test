<?php

namespace App;

use App\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController {
    #[Route('/api/products', methods: ['GET'])]

    public function index(ProductService $service)
    {
        $service -> getAll();
    }
}
