<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('vehicles.index')->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // sort availability to a bool
        $avail = $request->input('avail') ? 1 : 0;

        //validate form inpur
        $request->validate([
            'stockNo' => 'required|size:17',
            'vin' => 'required|size:17',
            'year' => 'required|size:4',
            'make' => 'required|max:20',
            'model' => 'required|max:40',
            'odo' => 'required|size:10',
            'type' => 'required|size:1',
            'colour' => 'sometimes|max:10',
            'size' => 'required|max:4',
            'notes' => 'sometimes|max:256',
        ]);

        //create new stuff model
        $vehicle = new Vehicle;

        //Set all the verified data into new stuff model
        $vehicle->VEHICLE_STOCK_NUM = $request->stockNo;
        $vehicle->VEHICLE_VIN = $request->vin;
        $vehicle->VEHICLE_YEAR = $request->year;
        $vehicle->VEHICLE_MAKE = $request->make;
        $vehicle->VEHICLE_MODEL = $request->model;
        $vehicle->VEHICLE_ODO = $request->odo;
        $vehicle->VEHICLE_TYPE = $request->type;
        $vehicle->VEHICLE_COLOR = $request->colour;
        $vehicle->VEHICLE_SIZE = $request->size;
        $vehicle->AVAIL_STATUS = $avail;
        $vehicle->NOTES = $request->notes;

        //save new stuff model
        $vehicle->save();

        //return to index
        return to_route('admin.vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        // $user_id = Auth::id();
        // if($stuff->user_id != $user_id){
        //     return abort(403);
        // }

        return view('vehicles.show')->with('vehicle', $vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
