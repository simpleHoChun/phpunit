<?php
/* tests/CartTest.php */

require __DIR__ . '/../Cart.php';

class CartTest extends PHPUnit_Framework_TestCase
{
    public function testConstructorCallsInternalMethods()
    {
        $classname = 'Car';

        // Get mock, without the constructor being called
        $mock = $this->getMockBuilder($classname)
                     ->disableOriginalConstructor()
                     ->getMock();

        // set expectations for constructor calls
        $mock->expects($this->once())
             ->method('setDoors')
             ->with(
                 $this->equalTo(4)
             );

        // now call the constructor
        $reflectedClass = new ReflectionClass($classname);
        $constructor = $reflectedClass->getConstructor();
        $constructor->invoke($mock, 4);
    }
}
