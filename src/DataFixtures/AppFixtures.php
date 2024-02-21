<?php

namespace App\DataFixtures;

use App\Entity\Phone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\Query\Expr\Math;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            // Création d'une vingtaine de livres ayant pour titre
            for ($i = 1; $i < 21; $i++) {
                $phone = new Phone;
                $phone->setName('Phone ' . $i);
                $phone->setBrand('Brand');
                $phone->setSerialNumber($i * rand(1,99999));
                $manager->persist($phone);
            }
            $manager->flush();
        }
    }