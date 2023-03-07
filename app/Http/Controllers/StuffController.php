<?php

namespace App\Http\Controllers;

use App\Models\Stuff;
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
        $stuffs = Stuff::where('id', Auth::id())->get();
    
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
        $request->validate([
            'pName' => 'sometimes|max:20',
            'fName' => 'required|max:20',
            'lName' => 'required|max:20',
            'phone' => ['required', 'regex:/^\d{3}-\d{3}-\d{4}$/'],
            'email' => 'required|email|max:40',
            'dob' => 'required|date',
            'add1' => 'required|max:30',
            'add2' => 'sometimes|max:30',
            'city' => 'required|max:30',
            'prov' => 'required|size:2',
            'country' => 'required|max:30',
            'pCode' => ['required', 'regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/'],
            'eName' => 'required|max:40',
            'ePhone' => ['required', 'regex:/^\d{3}-\d{3}-\d{4}$/']
        ]);

        $newStuffID = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5);

        $stuff = new Stuff;
        $stuff->id = Auth::user()->id;
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
        
        $stuff->save();

        return to_route('info.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stuff $stuff): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stuff $stuff): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stuff $stuff): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stuff $stuff): RedirectResponse
    {
        //
    }
}
