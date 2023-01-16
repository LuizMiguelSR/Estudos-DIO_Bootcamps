<?php 

namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api/v1", name="api_v1_usuario")
 */
class UsuarioController extends AbstractController
{
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista(PersistenceManagerRegistry $doctrine): JsonResponse
    {
        $orm = $doctrine->getRepository(Usuario::class);

        return new JsonResponse($orm->pegarTodos());
    }

    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function cadastra(Request $request, PersistenceManagerRegistry $doctrine): Response
    {
        $data = $request->request->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        $orm = $doctrine->getManager();
        $orm->persist($usuario);
        $orm->flush();

        if($orm->contains($usuario))
        {
            return new Response("ok", 200);
        } else {
            return new Response("error", 404);
        }
    }
}