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
use App\JamStorageBundle\Entity\JamJar;

class LoadJamJarData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $jamJar1 = new JamJar();
        $jamJar1->setType($em->merge($this->getReference('type-apple')));
        $jamJar1->setYear(2014);

        $jamJar2 = new JamJar();
        $jamJar2->setType($em->merge($this->getReference('type-apricot')));
        $jamJar2->setYear(2014);

        $jamJar3 = new JamJar();
        $jamJar3->setType($em->merge($this->getReference('type-apple')));
        $jamJar3->setYear(2014);

        $jamJar4 = new JamJar();
        $jamJar4->setType($em->merge($this->getReference('type-apple')));
        $jamJar4->setYear(2014);
        $jamJar4->setComment("The best one.");

        $jamJar5 = new JamJar();
        $jamJar5->setType($em->merge($this->getReference('type-apple')));
        $jamJar5->setYear(2014);

        $em->persist($jamJar1);
        $em->persist($jamJar2);
        $em->persist($jamJar3);
        $em->persist($jamJar4);
        $em->persist($jamJar5);
        $em->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}