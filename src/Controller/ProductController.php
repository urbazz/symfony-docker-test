<?php

namespace App\Controller;

use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/product/', name:'products')]
class UserController extends AbstractController
{
    #[Route(path:"/", methods: ["GET"])]
    public function getAllProducts(ProductService $service) {
        $service->getAllProducts();
    }

    #[Route(path:'/product/{id}', methods: ["GET"])]
    public function getOneProduct(Request $request, ProductService $service) {
        $service->getOneProduct($request);
    }
}
