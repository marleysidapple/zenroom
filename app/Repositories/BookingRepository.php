<?php 

namespace App\Repositories;

use App\Booking;

class BookingRepository
{


	public function getAvailability($type)
	{
		$dateAfterOneMonth =  date('Y-m-d', strtotime("+1 month"));
		$booking = Booking::where('date', '<', strtotime($dateAfterOneMonth))->where('type', $type)->get();
		return $booking;
	}



	public function updateDetail($data)
	{
		dd($data);
	}	


}