<?php

namespace Braddle\PhpUk2023\LeapYear;

class LeapYearCalculator
{

    public static function isA(int $year)
    {
        if (self::isAtypicalLeapYear($year)) {
            return true;
        }

        if (self::isAtypicalCommonYear($year)) {
            return false;
        }

        return self::isTypicalLeapYear($year);
    }

    /**
     * @param int $year
     * @return bool
     */
    private static function isTypicalLeapYear(int $year): bool
    {
        return $year % 4 == 0;
    }

    /**
     * @param int $year
     * @return bool
     */
    private static function isAtypicalCommonYear(int $year): bool
    {
        return $year % 100 == 0;
    }

    /**
     * @param int $year
     * @return bool
     */
    private static function isAtypicalLeapYear(int $year): bool
    {
        return $year % 400 == 0;
    }
}