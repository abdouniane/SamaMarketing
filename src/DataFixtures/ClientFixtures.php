<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Client;

class ClientFixtures extends Fixture {

    public function load(ObjectManager $manager) {
        for ($i = 1; $i <= 10; $i++) {
            $client = new Client();
            $client->setNom("CLIENT NOM N° $i");
            $client->setPrenom("CLIENT PRENOM N° $i");
            $client->setTelephone("CLIENT PHONE N° $i");
            $manager->persist($client);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

}
