<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\KafaActivityRecord;
use Illuminate\View\View;

class KafaActivityController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_kafaactivities = KafaActivityRecord::all();
        return view('ManageKafaActivity.parents.index')->with('parents', $_kafaactivities);
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
    public function show($id)
    {
        //
    }

    public function viewBooking()
    {
        // Retrieve the authenticated user (parent)
        $parent = Auth::user();

        // Retrieve the bookings for the current parent
        $bookings = $parent->bookings;

        return view('ManageKafaActivity.parents.viewbooking', compact('bookings'));
    }

    public function book($id)
    {
        // Retrieve the authenticated user (parent)
        $parent = Auth::user();

        // Retrieve the activity based on $id
        $activity = KafaActivityRecord::findOrFail($id);

        // Attach the activity to the parent's bookings
        $parent->bookings()->attach($activity);

        return redirect()->back()->with('success', 'Activity booked successfully!');
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
