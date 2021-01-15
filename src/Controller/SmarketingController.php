<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use App\Entity\Admin;
use App\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class SmarketingController extends AbstractController {

    /**
     * @Route("/", name="login1")
     * @Route("/login/", name="login")
     */
    public function login(Request $request): Response {       
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/deconnexion", name="logout")
     */
    public function logout(): Response {
        
    }

    /**
     * @Route("/nouveau-client", name="nouveau-client")     
     */
    public function nouveauClient(): Response {
        return $this->render('smarketing/nouveau-client.html.twig');
    }

    /**
     * @Route("/mes-clients", name="mes-clients")     
     */
    public function mesClients(): Response {
        $repo = $this->getDoctrine()->getRepository(Client::class);
        $clients = $repo->findAll();


        return $this->render('smarketing/mes-clients.html.twig', [
                    'clients' => $clients
        ]);
    }

    /**
     * @Route("/administrateurs", name="administrateurs")     
     */
    public function mesAdmins(): Response {
        $repo = $this->getDoctrine()->getRepository(Admin::class);
        $admins = $repo->findAll();


        return $this->render('admin/index.html.twig', [
                    'admins' => $admins
        ]);
    }

    /**
     * @Route("/historiques", name="historiques")     
     */
    public function historiques(): Response {
        $repo = $this->getDoctrine()->getRepository(Message::class);
        $messages = $repo->findAll();

        return $this->render('smarketing/historiques.html.twig', [
                    'messages' => $messages
        ]);
    }

    /**
     * @Route("ajouter-client", name="ajouter-client")
     */
    public function ajouterClient(Request $request, EntityManagerInterface $manager): Response {

        $client = new Client();
    }

    /**
     * @Route("/parametres", name="parametres")     
     */
    public function parametres(): Response {
        return $this->render('smarketing/parametres.html.twig');
    }

}
