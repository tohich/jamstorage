<?php
/**
 * Created by PhpStorm.
 * User: Tohich
 * Date: 17.09.14
 * Time: 1:01
 */

namespace App\JamStorageBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use App\JamStorageBundle\Entity\JamType;

class LoadJamTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $apple = new JamType();
        $apple->setName('Apple');

        $apricot = new JamType();
        $apricot->setName('Apricot');

        $blackberry = new JamType();
        $blackberry->setName('Blackberry');

        $blueberry = new JamType();
        $blueberry->setName('Blueberry');

        $strawberry = new JamType();
        $strawberry->setName('Strawberry');

        $peach = new JamType();
        $peach->setName('Peach');

        $em->persist($apple);
        $em->persist($apricot);
        $em->persist($blackberry);
        $em->persist($blueberry);
        $em->persist($strawberry);
        $em->persist($peach);
        $em->flush();

        $this->addReference('type-apple', $apple);
        $this->addReference('type-apricot', $apricot);
        $this->addReference('type-blackberry', $blackberry);
        $this->addReference('type-blueberry', $blueberry);
        $this->addReference('type-strawberry', $strawberry);
        $this->addReference('type-peach', $peach);
    }

    public function getOrder()
    {
        return 1;
    }
}