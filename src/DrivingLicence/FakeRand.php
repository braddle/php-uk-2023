<?php

namespace Braddle\PhpUk2023\DrivingLicence;

class FakeRand implements RandomNumbersGenerator
{

    public function generate(int $numberOfDigits): string
    {
        return str_repeat("0", $numberOfDigits);
    }
}