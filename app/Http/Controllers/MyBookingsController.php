<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class MyBookingsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }



    public function index(Request $request)
    {
        $bookings = $request->user()->bookings()->paginate(5);
        return view(
            'mybookings.index',
            [
                'bookings' => $bookings,
            ]
        );
    }



    public function details(Booking $booking)
    {

        return view('mybookings.details', [
            'booking' => $booking,
            'bookedServices' => $booking->booked_services
        ]);
    }
}
