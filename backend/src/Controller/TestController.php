<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function list(): JsonResponse
    {
        return new JsonResponse(['error' => 'error']);
    }
}
