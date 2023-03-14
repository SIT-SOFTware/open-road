<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class TrashedVehicleController extends Controller
{
        //shows all trashed vehicles
        public function index(){
            $vehicles = Vehicle::onlyTrashed()->latest('updated_at');
            $atvs = $vehicles->where('VEHICLE_TYPE', 2);
            $bikes =  $vehicles->where('VEHICLE_TYPE', 1);

            return view('vehicles.index')->with('bikes', $bikes)->with('atvs', $atvs);
        }
    
        //restores a trashed vehicle
        public function update(Vehicle $vehicle){
    
            $vehicle->restore();
    
            return to_route('admin.vehicles.index')->with('success', 'Vehicle Restored!');
        }
    
        //permanently deletes a trashed vehicle
        public function destroy(Vehicle $vehicle){
    
            $vehicle->forceDelete();
    
            return to_route('admin.vehicles.index')->with('success', 'Vehicle Permanently Deleted!');
        }
}
