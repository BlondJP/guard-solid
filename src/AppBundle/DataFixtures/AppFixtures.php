<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $users = $this->getUsers();
        //dump($users); die;

        foreach ($users as $user) {
            $manager->persist($user);
        }

        $manager->flush();
    }

    private function getUsers()
    {
        yield (new User())->setApiKey('MT5476')->setUsername('MT5476');
    }
}