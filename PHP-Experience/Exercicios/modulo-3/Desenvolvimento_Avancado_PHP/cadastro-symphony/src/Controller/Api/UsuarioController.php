<?php 

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_usuario")
 */
class UsuarioController
{
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista(): JsonResponse
    {
        return new JsonResponse(["Implementar lista na API", 404]);
    }

    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function cadastrar(): JsonResponse
    {
        return new JsonResponse(["Implementar lista na API", 404]);
    }
}