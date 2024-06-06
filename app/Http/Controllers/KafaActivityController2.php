<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\KafaActivityRecord;
use App\Models\Booking;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;


class KafaActivityController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $kafaactivities = KafaActivityRecord::all();
    return view('ManageKafaActivity.parents.index', compact('kafaactivities'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id): View
    {
        $bookings = Booking::with('activity')->get();

        // Log the bookings for debugging
        Log::info('Bookings retrieved:', $bookings->toArray());

        return view('ManageKafaActivity.parents.viewbooking', compact('bookings'));
    }


    public function book($id)
    {
        $activity = KafaActivityRecord::findOrFail($id);

        $booking = new Booking();
        $booking->activity_id = $activity->id;
        $booking->save();

        return redirect()->route('parents.viewBooking')->with('success', 'Activity booked successfully!');
    }

    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('parents.viewBooking')->with('success', 'Booking cancelled successfully!');
    }


    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   

    

}
