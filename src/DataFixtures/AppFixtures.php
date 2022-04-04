<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('Produkt 1');
        $product->setAmount(4);
        $manager->persist($product);

        $product2 = new Product();
        $product2->setName('Produkt 2');
        $product2->setAmount(12);
        $manager->persist($product2);
        
        $product3 = new Product();
        $product3->setName('Produkt 5');
        $product3->setAmount(0);
        $manager->persist($product3);

        $product4 = new Product();
        $product4->setName('Produkt 7');
        $product4->setAmount(6);
        $manager->persist($product4);

        $product5 = new Product();
        $product5->setName('Produkt 8');
        $product5->setAmount(2);
        $manager->persist($product5);

        $manager->flush();
    }
}
