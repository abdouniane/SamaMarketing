<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Admin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminController extends AbstractController {

    /**
     * @Route("/admin", name="admin")
     * @Route("/admin/{id}/edit", name="admin-editing")
     */
    public function index(Admin $admin = null, Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $passwordEncoder): Response {
        if (!$admin) {
            $admin = new Admin();
        }


        $adminForm = $this->createForm(\App\Form\AdminType::class, $admin);
        $adminForm->handleRequest($request);

        if ($adminForm->isSubmitted() && $adminForm->isValid()) {
            $admin->setPassword($hash = $passwordEncoder->encodePassword($admin, $admin->getPassword()
            ));
            $manager->persist($admin);
            $manager->flush();
            return $this->redirectToRoute("administrateurs");
        }

        return $this->render('smarketing/parametres.html.twig', [
                    'adminForm' => $adminForm->createView(),
                    "editMode" => $admin->getId() != null
        ]);
    }
     /**
      *  @Route("/admin/{id}/delete", name="sup-admin")
      */
    public function supprimer(Admin $admin = null, Request $request, EntityManagerInterface $manager): Response {
        $manager->remove($admin);
        $manager->flush();
        return $this->redirectToRoute("administrateurs");
    }

}
