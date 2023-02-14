<?php

namespace Braddle\PhpUk2023\DrivingLicence;

class UnderageApplicant implements LicenceApplicant
{

    public function getAge(): int
    {
        return 16;
    }

    public function getDateOfBirth(): \DateTime
    {
        return new \DateTime();
    }

    public function getInitials(): string
    {
        return "";
    }
}