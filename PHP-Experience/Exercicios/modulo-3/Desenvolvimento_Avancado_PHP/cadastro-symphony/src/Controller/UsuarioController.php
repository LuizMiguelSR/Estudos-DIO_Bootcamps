<?php 

namespace App\Controller;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

/**
 * @Route("/", name="web_usuario")
 */
class UsuarioController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response
    {
        return $this->render("usuario/form.html.twig");
    }

    /**
     * @Route("/salvar", methods={"POST"}, name="salvar")
     */
    public function salvar(Request $request, PersistenceManagerRegistry $doctrine): Response
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
            return $this->render("usuario/sucesso.html.twig", [
                "fulano" => $data['nome']
            ]);
        } else {
            return $this->render("usuario/erro.html.twig", [
                "fulano" => $data['nome']
            ]);
        }
    }

}