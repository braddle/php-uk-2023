<?php

namespace Braddle\PhpUk2023\DrivingLicence;

interface RandomNumbersGenerator
{
    /**
     *
     * @param int $numberOfDigits The number of digits to return
     * @return string of numbers with a length equal to $numberOfDigits
     */
    public function generate(int $numberOfDigits) : string;
}
