<?php

namespace App\Repositories;

use App\Booking;
use App\Helpers\Helper as GH;

class BookingRepository
{

    public function getAvailability($type)
    {
        $dateAfterOneMonth = date('Y-m-d', strtotime("+1 month"));
        $booking           = Booking::where('date', '<', strtotime($dateAfterOneMonth))
            ->where('date', '>=', strtotime(date('y-m-d')))
            ->where('type', $type)->get();
        return $booking;
    }

    public function updateDetail($data)
    {
        //dd($data['days']);
        //dd(GH::getSpecificDays($data['from'], $data['to'], 1));
        //dd(GH::getWeekEnd($data['from'], $data['to']));

        $allDates = array();

        foreach ($data['days'] as $val) {
            $dates = GH::getSpecificDays($data['from'], $data['to'], $val);
            foreach ($dates as $value) {
                $allDates[] = strtotime($value);
            }
        }

        $updates = array();

        if (isset($data['price'])){
        	$updates['price'] = $data['price'];
        }


        if (isset($data['available'])){
        	$updates['available_room'] = $data['available'];
        }

      

        $updateDetail = Booking::whereIn("date", $allDates)
            ->where('type', $data['room'])
            ->update($updates);

        /*$refinedResult = Booking::whereBetween("date", [strtotime($data['from']), strtotime($data['to'])])
    ->where('type', $data['room'])
    ->get();
     */

    }

}