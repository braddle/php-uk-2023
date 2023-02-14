<?php

namespace Braddle\PhpUk2023\DrivingLicence;

class NumberGenerator
{


    private RandomNumbersGenerator $rand;

    public function __construct(RandomNumbersGenerator $rand)
    {
        $this->rand = $rand;
    }

    public function getNumber(LicenceApplicant $param)
    {
        if ($param->getAge() < 17) {
            throw new InvalidDriverException();
        }

        $number = $param->getInitials();
        $number .= $param->getDateOfBirth()->format("dmY");

        $required = 16 - strlen($number);
        $number .= $this->rand->generate($required);
        return $number;
    }
}