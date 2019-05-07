<?php

namespace Dwo\Traits\Test;

use Dwo\Traits\Test\Fixtures\Entity;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    public function test()
    {
        $entity = new Entity();
        $entity->setActive($active = false);
        $entity->setAmount($amount = 1.23);
        $entity->setCreatedAt($createdAt = new \DateTime());
        $entity->setData($data = ['data']);
        $entity->setDeletedAt($deletedAt = new \DateTime());
        $entity->setId($id = 1);
        $entity->setName($name = 'name');
        $entity->setState($state = 'state');
        $entity->setType($type = 'type');
        $entity->setUpdatedAt($updatedAt = new \DateTime());
        $entity->setValue($value = 'value');

        self::assertEquals($active, $entity->isActive());
        self::assertEquals($amount, $entity->getAmount());
        self::assertEquals($createdAt, $entity->getCreatedAt());
        self::assertEquals($data, $entity->getData());
        self::assertEquals($deletedAt, $entity->getDeletedAt());
        self::assertEquals($id, $entity->getId());
        self::assertEquals($name, $entity->getName());
        self::assertEquals($state, $entity->getState());
        self::assertEquals($type, $entity->getType());
        self::assertEquals($updatedAt, $entity->getUpdatedAt());
        self::assertEquals($value, $entity->getValue());
    }

    public function testSetNull()
    {
        $entity = new Entity();
        $entity->setAmount(null);
        $entity->setCreatedAt(null);
        $entity->setData(null);
        $entity->setDeletedAt(null);
        $entity->setId(null);
        $entity->setName(null);
        $entity->setState(null);
        $entity->setType(null);
        $entity->setUpdatedAt(null);
        $entity->setValue(null);

        self::assertNull($entity->getAmount());
        self::assertNull($entity->getCreatedAt());
        self::assertNull($entity->getData());
        self::assertNull($entity->getDeletedAt());
        self::assertNull($entity->getId());
        self::assertNull($entity->getName());
        self::assertNull($entity->getState());
        self::assertNull($entity->getType());
        self::assertNull($entity->getUpdatedAt());
        self::assertNull($entity->getValue());
    }
}