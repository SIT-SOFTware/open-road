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
        $atvs = $vehicles->where('VEHICLE_TYPE', 2);
        $bikes =  $vehicles->where('VEHICLE_TYPE', 1);

        return view('vehicles.index')->with('atvs', $atvs)->with('bikes', $bikes)->with('vehicles', $vehicles);
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
            'odo' => 'required|max:10',
            'type' => 'required|size:1',
            'colour' => 'sometimes|max:10',
            'size' => 'required|max:4',
            'notes' => 'sometimes|max:256',
        ]);

        //Set all the verified data into new stuff model
        Vehicle::create([
            'VEHICLE_STOCK_NUM' => $request->stockNo,
            'VEHICLE_VIN' => $request->vin,
            'VEHICLE_YEAR' => $request->year,
            'VEHICLE_MAKE' => $request->make,
            'VEHICLE_MODEL' => $request->model,
            'VEHICLE_ODO' => $request->odo,
            'VEHICLE_TYPE' => $request->type,
            'VEHICLE_COLOR' => $request->colour,
            'VEHICLE_SIZE' => $request->size,
            'AVAIL_STATUS' => $avail,
            'NOTES' => $request->notes,
        ]);

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
    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit')->with('vehicle', $vehicle);
    }
    
    /**
     * Show the form for editing MULTIPLE classes
     */
    public function massEdit()
    {
        $vehicles = Vehicle::all()->sortBy('id');
        $atvs = $vehicles->where('VEHICLE_TYPE', 2);
        $bikes =  $vehicles->where('VEHICLE_TYPE', 1);

        return view('vehicles.massEdit')
            ->with('bikes', $bikes)
            ->with('atvs', $atvs);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
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
            'odo' => 'required|max:10',
            'type' => 'required|size:1',
            'colour' => 'sometimes|max:10',
            'size' => 'required|max:4',
            'notes' => 'sometimes|max:256',
        ]);

        //save updated Vehicle model
        $vehicle->update([
            'VEHICLE_STOCK_NUM' => $request->stockNo,
            'VEHICLE_VIN' => $request->vin,
            'VEHICLE_YEAR' => $request->year,
            'VEHICLE_MAKE' => $request->make,
            'VEHICLE_MODEL' => $request->model,
            'VEHICLE_ODO' => $request->odo,
            'VEHICLE_TYPE' => $request->type,
            'VEHICLE_COLOR' => $request->colour,
            'VEHICLE_SIZE' => $request->size,
            'AVAIL_STATUS' => $avail,
            'NOTES' => $request->notes,
        ]);

        //return to index
        return to_route('admin.vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //call the soft delete function
        $vehicle->delete();
        
        //return to index
        return to_route('admin.vehicles.index');
    }
}
