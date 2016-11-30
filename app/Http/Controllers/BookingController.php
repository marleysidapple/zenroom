<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests\BookingRequest;
use App\Repositories\BookingRepository;
use Illuminate\Http\Request;

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

        return view('pages.main', compact('list', 'day', 'singleBooking', 'doubleBooking'));
    }

    public function updateData(BookingRequest $request)
    {
        $datas = $this->booking->updateDetail($request->all());
        return \Redirect::to('/')->with('message', 'Details Updated successfully');

    }

    public function updateSingleRoom(Request $request)
    {
        $datas = $this->booking->updateSingleRooms($request->columnid, $request->singleroom);
        return \Redirect::to('/')->with('message', 'Details Updated successfully');
    }

    public function updateSinglePrice(Request $request)
    {
        $datas = $this->booking->updateSinglePrices($request->columnid, $request->singleprice);
        return \Redirect::to('/')->with('message', 'Details Updated successfully');
    }

    public function updateDoubleRoom(Request $request)
    {
        $datas = $this->booking->updateDoubleRooms($request->columnid, $request->doubleroom);
        return \Redirect::to('/')->with('message', 'Details Updated successfully');
    }

    public function updateDoublePrice(Request $request)
    {
        $datas = $this->booking->updateDoublePrices($request->columnid, $request->doubleprice);
        return \Redirect::to('/')->with('message', 'Details Updated successfully');
    }
}
