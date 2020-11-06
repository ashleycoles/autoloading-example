<?php

require_once '../../vendor/autoload.php';


use PHPUnit\Framework\TestCase;

class CowTest extends TestCase
{
    public function testEatSuccess()
    {
        // Here we are creating a fake 'mock' object
        // We must tell phpunit which class we're mocking
        $grassMock = $this->createMock(\MyApp\Grass\Grass::class);
        // We have a method on the our mock called getFoodType, and that the method will return 'grass' and should only be called one time
        $grassMock->expects($this->once())
            ->method('getFoodType')
            ->willReturn('grass');

        $cow = new MyApp\Cow\Cow();

        // Rather than using the grass class, we instead use our new mocked version
        $result = $cow->eat($grassMock);
        $expected = 'mmm grass';
        $this->assertEquals($expected, $result);
    }
}