<?php

namespace App\Helpers;

class Helper
{
    public static function getSpecificDays($start, $end, $weekdayNumber)
    {
        //[1=monday, 2=tuesday, 3=wednesday, 4=thursday, 5=friday, 6=saturday, 0=sunday]
        $startDate = strtotime($start);
        $endDate   = strtotime($end);

        $specificDay = array();

        do {
            if (date("w", $startDate) != $weekdayNumber) {
                $startDate += (24 * 3600); // add 1 day
            }
        } while (date("w", $startDate) != $weekdayNumber);

        while ($startDate <= $endDate) {
            $specificDay[] = date('Y-m-d', $startDate);
            $startDate += (7 * 24 * 3600); // add 7 days
        }

       return $specificDay;
    }

    public static function getWeekDays($start, $end)
    {
        $start  = new \DateTime($start);
        $end    = new \DateTime($end);
        $oneday = new \DateInterval("P1D");

        $weekDay = array();

        foreach (new \DatePeriod($start, $oneday, $end->add($oneday)) as $day) {
            $day_num = $day->format("N"); /* 'N' number days 1 (mon) to 7 (sun) */
            if ($day_num < 6) {
                /* weekday */
                $weekDay[] = $day->format("Y-m-d");
            }
        }
        
       return $weekDay;

    }


     public static function getWeekEnd($start, $end)
    {
        $start  = new \DateTime($start);
        $end    = new \DateTime($end);
        $oneday = new \DateInterval("P1D");

        $weekEnd = array();

        foreach (new \DatePeriod($start, $oneday, $end->add($oneday)) as $day) {
            $day_num = $day->format("N"); /* 'N' number days 1 (mon) to 7 (sun) */
            if ($day_num >= 6) {
                /* weekEnd */
                $weekEnd[] = $day->format("Y-m-d");
            }
        }
        
        return $weekEnd;

    }
}
