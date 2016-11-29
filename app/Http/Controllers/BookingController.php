<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Booking;
use App\Repositories\BookingRepository;

class BookingController extends Controller
{

    protected $booking;

    public function __construct(BookingRepository $bookings)
    {
        $this->booking = $bookings;
    }

    public function index()
    {

        $singleBooking = $this->booking->getAvailability('single');
        $doubleBooking = $this->booking->getAvailability('double');

        foreach ($singleBooking as $key => $val) {
            $list[] = date('l', $val->date);
            $day[]  = date('j', $val->date);
        }

        

        return view('welcome', compact('list', 'day', 'singleBooking', 'doubleBooking'));
    }




    public function updateData(Request $request)
    {
    	$datas = $this->booking->updateDetail($request->all());
    	
    }
}
