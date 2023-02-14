<?php

namespace ADT;

use Braddle\PhpUk2023\ADT\Stack;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\FileIterator\Facade;

class StackTest extends TestCase
{

    private $empty, $one, $two;

    protected function setUp() : void
    {
        parent::setUp();

        $this->empty = new Stack();

        $this->one = new Stack();
        $this->one->push("snap");

        $this->two = new Stack();
        $this->two->push("snap");
        $this->two->push("crackle");

    }


    public function testEmpty()
    {
        $this->assertTrue($this->empty->isEmpty());
    }

    public function testNotEmpty()
    {
        $this->assertFalse($this->one->isEmpty());
    }

    public function testEmptyIsZero()
    {
        $this->assertEquals(0, $this->empty->count());
    }

    public function testCountOfOne()
    {
        $this->assertEquals(1, $this->one->count());
    }

    public function testCountOfTwo()
    {
        $this->assertEquals(2, $this->two->count());
    }

    public function testPopOffOne()
    {
        $this->assertEquals("snap", $this->one->pop());
    }

    public function testPopOffTwo()
    {
        $this->assertEquals("crackle", $this->two->pop());
        $this->assertEquals("snap", $this->two->pop());
    }


}