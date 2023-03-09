<?php

namespace App\Http\Controllers;

use App\Models\Stuff;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all students associated with logged in user
        $stuffs = Stuff::where('user_id', Auth::id())->get();

        //go to view with all the students
        return view('stuffs.index')->with('stuffs', $stuffs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stuffs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form inpur
        $request->validate([
            'pName' => 'sometimes|max:20',
            'fName' => 'required|max:20',
            'lName' => 'required|max:20',
            'phone' => ['required', 'regex:/^\d{3}-\d{3}-\d{4}$/'],
            'email' => 'required|email|max:40',
            //'dob' => 'required|date',
            'add1' => 'required|max:30',
            'add2' => 'sometimes|max:30',
            'city' => 'required|max:30',
            'prov' => 'required|size:2',
            'country' => 'required|max:30',
            'pCode' => ['required', 'regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/'],
            'eName' => 'required|max:40',
            'ePhone' => ['required', 'regex:/^\d{3}-\d{3}-\d{4}$/']
        ]);

        //random generate stuff number
        $newStuffID = strval(rand(10000, 99999));

        //create new stuff model
        $stuff = new Stuff;
        //set user id to logged in user
        $stuff->user_id = Auth::id();

        //Set all the verified data into new stuff model
        $stuff->STUFF_ID = $newStuffID;
        $stuff->STUFF_LEVEL = '1';
        $stuff->STUFF_PNAME = $request->pName;
        $stuff->STUFF_FNAME = $request->fName;
        $stuff->STUFF_LNAME = $request->lName;
        $stuff->STUFF_PHONE = $request->phone;
        $stuff->STUFF_EMAIL = $request->email;
        $stuff->STUFF_DOB = $request->dob;
        $stuff->STUFF_DLN = '1234567890';
        $stuff->STUFF_ADDR1 = $request->add1;
        $stuff->STUFF_ADDR2 = $request->add2;
        $stuff->STUFF_CITY = $request->city;
        $stuff->STUFF_PR_ST = $request->prov;
        $stuff->STUFF_COUNTRY = $request->country;
        $stuff->STUFF_POST_ZIP = $request->pCode;
        $stuff->EMERGCONT_NAME = $request->eName;
        $stuff->STUFF_WAIVER = '1';
        $stuff->EMERGCONT_PHONE = $request->ePhone;

        //save new stuff model
        $stuff->save();

        //return to index
        return to_route('info.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stuff $stuff)
    {
        // $user_id = Auth::id();
        // if($stuff->user_id != $user_id){
        //     return abort(403);
        // }

        return view('stuffs.show')->with('stuff', $stuff);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stuff $stuff)
    {
        //redirect to the edit blade with stuff model
        return view('stuffs.edit', compact('stuff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stuff $stuff)
    {
        //Validate All Inputed data
        $request->validate([
            'pName' => 'sometimes|max:20',
            'fName' => 'required|max:20',
            'lName' => 'required|max:20',
            'phone' => ['required', 'regex:/^\d{3}-\d{3}-\d{4}$/'],
            'email' => 'required|email|max:40',
            //'dob' => 'required|date',
            'add1' => 'required|max:30',
            'add2' => 'sometimes|max:30',
            'city' => 'required|max:30',
            'prov' => 'required|size:2',
            'country' => 'required|max:30',
            'pCode' => ['required', 'regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/'],
            'eName' => 'required|max:40',
            'ePhone' => ['required', 'regex:/^\d{3}-\d{3}-\d{4}$/']
        ]);

        //Update Stuff with new Data
        $stuff->update([
            'STUFF_PNAME' => $request->pName,
            'STUFF_FNAME' => $request->fName,
            'STUFF_LNAME' => $request->lName,
            'STUFF_PHONE' => $request->phone,
            'STUFF_EMAIL' => $request->email,
            'STUFF_DOB' => $request->dob,
            'STUFF_DLN' => '1234567890',
            'STUFF_ADDR1' => $request->add1,
            'STUFF_ADDR2' => $request->add2,
            'STUFF_CITY' => $request->city,
            'STUFF_PR_ST' => $request->prov,
            'STUFF_COUNTRY' => $request->country,
            'STUFF_POST_ZIP' => $request->pCode,
            'EMERGCONT_NAME' => $request->eName,
            'STUFF_WAIVER' => '1',
            'EMERGCONT_PHONE' => $request->ePhone,
        ]);

        //return to index
        return to_route('info.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stuff $stuff)
    {
        //call the soft delete function
        $stuff->delete();
        
        //return to index
        return to_route('info.index');
    }
}
