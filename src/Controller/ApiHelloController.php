<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class ApiHelloController extends AbstractController
{
    #[Route('/api/hello', name: 'app_api_hello')]
    public function show(): JsonResponse
    {
        return $this->json([
            'message' => "i'm Okay !",
            'statusCode' => 200,
        ]);
    }
}
