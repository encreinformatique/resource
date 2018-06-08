<?php

namespace EncreInformatique\Component\Resource\Tests;

use EncreInformatique\Component\Resource\Model\CountryInterface;
use EncreInformatique\Component\Resource\Model\CountryTrait;
use PHPUnit\Framework\TestCase;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping as ORM;

class CountryTraitTest extends TestCase
{
    /**
     * @test
     * @group Trait
     */
    public function initialized()
    {
        $entity = new EntityTest();
        $entity->setCountry('fr');

        $this->assertEquals('fr', $entity->getCountry());
    }

    /**
     * @test
     * @group Trait
     */
    public function properties()
    {
        $entity = new EntityTest();

        $entityReflection = new \ReflectionObject($entity);

        $this->assertTrue($entityReflection->hasProperty('country'));

        $annotationReader = new AnnotationReader();
        $entityProperty = $entityReflection->getProperty('country');
        $this->assertFalse(null === $entityProperty);

        //$annotation = $annotationReader->getPropertyAnnotation($entityProperty, Column::class);
        //$this->assertFalse(null === $annotation);
    }
}

class EntityTest implements CountryInterface
{
    use CountryTrait;
}
