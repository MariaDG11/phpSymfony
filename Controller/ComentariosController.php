<?php

namespace App\Controller;

use App\Entity\ComentariosMaleteo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ComentariosController extends AbstractController
{
    /**
     * @Route("/comentarios", name="comentarios")
     */
    public function getComentarios(EntityManagerInterface $em)
    {
        $repo = $em->getRepository(ComentariosMaleteo::class);

        $maleteo = $repo->findAll();

        return $this->render(
            'comentarios.html.twig',
            ['comentarios' => $maleteo]
        );
    }

    /**
     * @Route("/opinion", name="opinion")
     */
    public function getComentario(Request $request, EntityManagerInterface $em)
    {

        $texto = $request->get('texto');
        $autor = $request->get('autor');
        $ciudad = $request->get('ciudad');

        if ($texto && $autor && $ciudad) {
            $maleteo = new ComentariosMaleteo();
            $maleteo->setTexto($texto);
            $maleteo->setAutor($autor);
            $maleteo->setCiudad($ciudad);

            $em->persist($maleteo);
            $em->flush();
        }

        $repo = $em->getRepository(ComentariosMaleteo::class);

        $variable = $repo->findAll();
        $claves = array_rand($variable, 3);
        $array = [];

        foreach ($claves as $clave) {
            $opinion = $variable[$clave];
            $array[] = $opinion;
        }






        return $this->render(
            "clientesMaleteo.html.twig",
            ['variable' => $array]
        );
    }
}
