<?php

namespace Braddle\PhpUk2023\DrivingLicence;

interface LicenceApplicant
{
    public function getAge() : int;
    public function getDateOfBirth() : \DateTime;
    public function getInitials() : string;
}
