<?php


namespace App\Controller;


use App\Entity\ClientesMaleteo;
use App\Entity\ComentariosMaleteo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MaleteoController extends AbstractController
{
    /**
     * @Route("/clientes/", name="clientes")
     */
    public function getClientesMaleteo(EntityManagerInterface $em)
    {
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

    /**
     * @Route("/registro", name="registro")
     */
    public function getClientes(Request $request, EntityManagerInterface $em)
    {

        $nombre = $request->get('nombre');
        $email = $request->get('email');
        $ciudad = $request->get('ciudad');

        if ($nombre) {
            $maleteo = new ClientesMaleteo();
            $maleteo->setNombre($nombre);
            $maleteo->setEmail($email);
            $maleteo->setCiudad($ciudad);

            $em->persist($maleteo);
            $em->flush();
        }


        $repo = $em->getRepository(ClientesMaleteo::class);

        $maleteo = $repo->findAll();

        return $this->render(
            "registro.html.twig",
            ['registro' => $maleteo]
        );
    }
}
