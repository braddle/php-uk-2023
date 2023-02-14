<?php

namespace LeapYear;

use Braddle\PhpUk2023\LeapYear\LeapYearCalculator;
use PHPUnit\Framework\TestCase;

class LeapYearCalculatorTest extends TestCase
{
    public function test2023IsNotALeapYear()
    {
        $this->assertFalse(LeapYearCalculator::isA(2023));
    }

    public function testYearsDivisibleBy4AreTypicalLeapYears()
    {
        $this->assertTrue(LeapYearCalculator::isA(2024));
        $this->assertTrue(LeapYearCalculator::isA(2020));
        $this->assertTrue(LeapYearCalculator::isA(1996));
    }

    public function test1900IsNotALeapYear()
    {
        $this->assertFalse(LeapYearCalculator::isA(1900));
    }

    public function test1700IsNotALeapYear()
    {
        $this->assertFalse(LeapYearCalculator::isA(1700));
    }

    public function test2100IsNotALeapYear()
    {
        $this->assertFalse(LeapYearCalculator::isA(2100));
    }

    public function test2000IsNotALeapYear()
    {
        $this->assertTrue(LeapYearCalculator::isA(2000));
    }

    public function test2400IsNotALeapYear()
    {
        $this->assertTrue(LeapYearCalculator::isA(2400));
    }
}