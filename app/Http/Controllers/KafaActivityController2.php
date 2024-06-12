<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\KafaActivityRecord;
use App\Models\StudentRecord;
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
    $kafaactivities = KafaActivityRecord::where('hidden', false)->get();
    return view('ManageKafaActivity.parents.index', compact('kafaactivities'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('ManageKafaActivity.parents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'StudentName' => 'required|string|max:255',
        'StudentGender' => 'required|in:male,female,other',
        'StudentAge' => 'required|integer|min:1',
        'EducationLevel' => 'required|string|max:255',
        'EmergencyContact' => 'required|string|max:15', // Adjust max length as needed
    ]);

    // Create a new student record
    $student = new studentRecord();
    $student->StudentName = $validated['StudentName'];
    $student->StudentGender = $validated['StudentGender'];
    $student->StudentAge = $validated['StudentAge'];
    $student->EducationLevel = $validated['EducationLevel'];
    $student->EmergencyContact = $validated['EmergencyContact'];
    $student->save();


   // Render the showStudent view with the student's data
    return view('ManageKafaActivity.parents.showStudent', compact('student'));

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

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showStudent($id)
{
    $student = Student::findOrFail($id); // Fetch the student by ID
    return view('showStudent', ['student' => $student]);
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
