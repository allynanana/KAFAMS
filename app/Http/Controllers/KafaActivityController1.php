<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\KafaActivityRecord;
use Illuminate\View\View;

class KafaActivityController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $_kafaactivities = KafaActivityRecord::where('hidden', false)->get();
        return view('ManageKafaActivity.teachers.index')->with('teachers', $_kafaactivities);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('ManageKafaActivity.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        KafaActivityRecord::create($input);
        return redirect()->route('teachers.index')->with('flash_message', 'KafaActivityRecord Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id): View
    {
        $_kafaactivities = KafaActivityRecord::find($id);
        return view('ManageKafaActivity.teachers.view')->with('teachers',$_kafaactivities);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id): View
    {
        $_kafaactivities = KAFAActivityRecord::find( $id);
        return view('ManageKafaActivity.teachers.addstatus')->with('teachers',$_kafaactivities);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $_kafaactivities = KafaActivityRecord::find($id);

        if (!$_kafaactivities) {
            abort(404, 'KafaActivityRecord not found');
        }
        $input = $request->all();
        $_kafaactivities->update($input);

        return redirect()->route('teachers.index')->with('flash_message', 'KafaActivityRecord Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id): RedirectResponse
    {
        KafaActivityRecord::destroy($id);
        return redirect()->route('teachers.index')->with('flash_message', 'KafaActivityRecord deleted!'); 
    }

    public function search(Request $request)
{
    $search = $request->search;

    // Use the 'like' operator to search for activity names
    $teachers = KafaActivityRecord::where('ActivityName', 'like', "%$search%")->get();

    // Pass the search results to the view
    return view('ManageKafaActivity.teachers.index', compact('search', 'teachers'));
}

    


    




}