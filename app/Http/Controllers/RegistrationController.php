<?php

namespace App\Http\Controllers;

use App\Models\Stuff;
use App\Models\Course;
use App\Models\Vehicle;
use App\Models\PRA_Class;
use Illuminate\Support\Str;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all students associated with logged in user
        $stuffs = Stuff::where('user_id', Auth::id())->get();

        //grab stuff IDs
        $stuff_ids = $stuffs->pluck('STUFF_ID')->toArray();
        $registrations = Registration::whereIn('stuff_id', $stuff_ids)->get();

        $reg_info = [];
        // Create Array for Course Name / Class Start Date / Other Info
        foreach( $registrations as $registration ){
            //get class
            $pra_class = PRA_Class::where('CLASS_ID', $registration->CLASS_ID)->first();
            //get course
            $course = Course::where('COURSE_ID', $pra_class->COURSE_ID)->first();

            $reg_info[$registration->REG_ID] = ['class_date' => $pra_class->CLASS_START,
                                                'course_name' => $course->COURSE_NAME,
                                                'course_fee' => $course->COURSE_FEE];
        }

        //grab all courses
        $courses = Course::all();
        //go to view with all the students
        return view('registrations.index')->with([
            'registrations' => $registrations,
            'courses' => $courses,
            'stuffs' => $stuffs,
            'reg_info' => $reg_info,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //dd($request->course_id);
        $course_id = $request->course_id;
        // Get all students associated with logged-in user and select the STUFF_ID and STUFF_PNAME columns
        $stuffs = Stuff::where('user_id', Auth::id())->get();
        
        //$stuff_ids = $stuffs->pluck('STUFF_ID', 'STUFF_PNAME')->toArray();
        

        // Create an array of stuffs with the Stuff ID as the value and the Stuff PNAME as the displayed text
        $stuff_options = [];
        foreach ($stuffs as $stuff) {
            $stuff_options[$stuff->STUFF_ID] = $stuff->STUFF_PNAME;
        }
        //Get the course and its associated classes
        $course = Course::where('COURSE_ID', $course_id)->first();
        //dd($course);
        $classes = PRA_Class::where('COURSE_ID', $course_id)->get();
        
        //dd($classes);
        //Filter the classes to only show the ones with available seats
        $available_classes = [];
        $seats = [];

        //dd($classes);
        foreach ($classes as $class) {
            if ($class->registrations()->count() < $course->COURSE_MAX_SEATS) {
                $available_classes[$class->CLASS_ID] = $class->CLASS_START;
                $seats[$class->CLASS_ID] = $class->registrations()->count();
            }
        }
        //dd($available_classes);
        return view('registrations.create')->with([
            'stuff_options' => $stuff_options,
            'course' => $course,
            'classes' => $available_classes,
            'seats' => $seats
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // make sure stuff isn't already registered for this class
        $existingRegistration = Registration::where('CLASS_ID', $request->class_id)
            ->where('STUFF_ID', $request->stuff_id)
            ->first();

        if ($existingRegistration) {
            // registration already exists, return error response
            return response()->json(['message' => 'Student is already registered for this class'], 422);
        }

        //find vehicles not associated with this class so far
        $registrations = Registration::where('CLASS_ID', $request->class_id)->get();
        
        $vehicle_ids = $registrations->pluck('VEHICLE_STOCK_NUM')->toArray();
        
        $available_vehicle = Vehicle::whereNotIn('VEHICLE_STOCK_NUM', $vehicle_ids)->first();

        //dd($available_vehicle);
        //save new registration
        Registration::create([
        'REG_ID' => Str::random(4),
        'CLASS_ID' => $request->class_id,
        'STUFF_ID' => $request->stuff_id,
        'VEHICLE_STOCK_NUM' => $available_vehicle->VEHICLE_STOCK_NUM,
        'INVOICE_ID' => '1',
        'REGISTRATION_CANCELLED' => '1',
        'REGISTRATION_WAITLIST' => '1',
        ]);


        return to_route('registrations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
                //get all students associated with logged in user
                $stuffs = Stuff::where('user_id', Auth::id())->get();

                //grab stuff IDs
                $stuff_ids = $stuffs->pluck('STUFF_ID')->toArray();
                $registrations = Registration::whereIn('stuff_id', $stuff_ids)->get();

                // Create an array of stuffs with the Stuff ID as the value and the Stuff PNAME as the displayed text
                $stuffNameID = [];
                foreach ($stuffs as $stuff) {
                    $stuffNameID[$registration->STUFF_ID] = $stuff->STUFF_PNAME;
                }
        
                // Create Array for Course Name / Class Start Date / Other Info
                $class_info = [];

                foreach( $registrations as $registration ){

                //get class
                $pra_class = PRA_Class::where('CLASS_ID', $registration->CLASS_ID)->first();

                //get course
                $course = Course::where('COURSE_ID', $pra_class->COURSE_ID)->first();
    
                $class_info[$registration->REG_ID] = ['class_date' => $pra_class->CLASS_START,
                                                    'course_name' => $course->COURSE_NAME,
                                                    'course_fee' => $course->COURSE_FEE];
                }
                //go to view with all the students
                return view('registrations.edit')->with([
                    'registration' => $registration,
                    'class_info' => $class_info,
                    'course' => $course,
                    'stuff_NameID' => $stuffNameID,
                    'stuffs' => $stuffs,
                ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //dd($registration);
        //call the soft delete function
        $registration->delete();
        
        //return to index
        return to_route('registrations.index');
    }
}
