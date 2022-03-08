<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends AbstractController
{
    private $entityManager;
    private $productRepository;
    public function __construct(EntityManagerInterface $entityManager, ProductRepository $productRepository)
    {
        $this->entityManager = $entityManager;
        $this->productRepository = $productRepository;
    }
    /**
     * @return Product[]
     */
    
    #[Route('/product/{id}', name: 'get_product', methods:'GET', requirements: ['id' => '\d+'])]
    public function get($id)
    {
        $product = $this->findProductById($id);

        return new JsonResponse(
            $product,
            JsonResponse::HTTP_OK
        );
    }

    #[Route('/products', name: 'get_products', methods:'GET')]
    public function getAllProducts()
    {
        return new JsonResponse(
            $this->productRepository->findAll(),
            JsonResponse::HTTP_OK
        );
    }

    private function findProductById($id) 
    {
        $product = $this->productRepository->find($id);

        if (null == $product) {
            throw new NotFoundHttpException();
        }

        return $product;
    }
    
}
