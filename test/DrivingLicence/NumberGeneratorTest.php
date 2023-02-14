<?php

namespace DrivingLicence;

use Braddle\PhpUk2023\DrivingLicence\FakeRand;
use Braddle\PhpUk2023\DrivingLicence\InvalidDriverException;
use Braddle\PhpUk2023\DrivingLicence\NumberGenerator;
use Braddle\PhpUk2023\DrivingLicence\UnderageApplicant;
use Braddle\PhpUk2023\DrivingLicence\ValidApplicant;
use PHPUnit\Framework\TestCase;

class NumberGeneratorTest extends TestCase
{
    public function testUnderAgeApplicant()
    {
        $this->expectException(InvalidDriverException::class);

        $gen = new NumberGenerator(new FakeRand());

        $gen->getNumber(New UnderageApplicant());
    }

    public function testValidApplicant()
    {
        $gen = new NumberGenerator(new FakeRand());

        $licence = $gen->getNumber(new ValidApplicant("MDB"));

        $this->assertEquals("MDB1402202300000", $licence);
    }

    public function testValidApplicantNoMiddleName()
    {
        $gen = new NumberGenerator(new FakeRand());

        $licence = $gen->getNumber(new ValidApplicant("MB"));

        $this->assertEquals("MB14022023000000", $licence);
    }


}