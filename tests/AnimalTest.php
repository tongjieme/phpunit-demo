<?php
namespace App;

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: jackwin
 * Date: 5/21/17
 * Time: 11:03 AM
 */
class AnimalTest extends TestCase
{
    public function testSetNameWithConstructor()
    {
        $animal = new Animal('James');
        $this->assertAttributeEquals('James', 'name', $animal);
        $this->assertEquals('James', $animal->getName(), 'Animal should name James');
    }
}