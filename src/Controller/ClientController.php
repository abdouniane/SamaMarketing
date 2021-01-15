<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class ClientController extends AbstractController {

    /**
     * @Route("/client", name="client")
     * @Route("/client/{id}/edit", name="client-editing")
     */
    public function nouveau(Client $client = null, Request $request, EntityManagerInterface $manager): Response {
        if (!$client) {
            $client = new Client();
        }
        $clientForm = $this->createFormBuilder($client)
                ->add("nom", TextType::class, [
                    'attr' => ['class' => 'form-control', 'id' => 'nom']
                ])
                ->add("prenom", TextType::class, [
                    'attr' => ['class' => 'form-control', 'id' => 'prenom']])
                ->add("telephone", TextType::class, [
                    'attr' => ['class' => 'form-control', 'id' => 'telephone', 'placeholder' => 'ex : 781585646']])
                ->getForm();
        $clientForm->handleRequest($request);

        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            // new \DateTime()
            $manager->persist($client);
            $manager->flush();
            return $this->redirectToRoute("mes-clients");
        }
        return $this->render('smarketing/nouveau-client.html.twig', [
                    'clientForm' => $clientForm->createView(),
                    "editMode" => $client->getId() != null
        ]);
    }

    /**
     * @Route("/client/{id}/delete", name="supprimer")
     */
    public function supprimer(Client $client = null, Request $request, EntityManagerInterface $manager): Response {
        $manager->remove($client);
        $manager->flush();
        return $this->redirectToRoute("mes-clients");
    }

}
