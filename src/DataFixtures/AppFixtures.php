<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->encoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // Product fixtures
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->setName('Product ' . $i);
            $product->setPrice(rand(10, 50));
            $product->setSku('product-' . $i);
            $product->setDescription('Description product' . $i);

            $manager->persist($product);
        }

        // User fixtures
        $user = new User();
        $user->setEmail('ludovic.jn@gmail.com');
        $user->setRoles([
            'ROLE_ADMIN',
            'ROLE_API',
        ]);
        $user->setPassword($this->encoder->encodePassword($user, 'password'));

        $manager->persist($user);

        $manager->flush();
    }
}
