<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Stuff;
use App\Models\Course;
use App\Models\PRA_Class;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class ClassController extends Controller
{
    /**
     * Show a list of all the classes
     */
    public function index()
    {
        $classes = PRA_Class::all();
        return view('classes.index')->with('classes', $classes);
    }

    /**
     * Show the form for creating a new class
     */
    public function create()
    {
        $courses = Course::all()->sortBy('id');
        $stuff = Stuff::all()->where('STUFF_LEVEL', 1)->sortBy('STUFF_FNAME');
        //$stuff = Course::all()->sortBy('id');
        return view('classes.create')->with('courses', $courses)->with('stuff', $stuff);
    }

    /**
     * Store a newly created class in the class table
     */
    public function store(Request $request)
    {
        $endDate = Carbon::createFromFormat('Y-m-d', $request->startDate);
        
        $endDate = $endDate->addDays(3);

        PRA_Class::create([
            'COURSE_ID' => $request->courseID,
            'CLASS_ID' => $request->classCode,
            'PRIMARY_INST' => $request->instructorID,
            'CLASS_START' => $request->startDate,
            'CLASS_END' => $endDate,
        ]);

        return to_route('admin.classes.index');
    }

    /**
     * Display a single class
     * Model-route binding should be working but for some reason it really doesn't want to
     */
    public function show(PRA_Class $class)
    {
        //finds the class entry in the database 
        //$class = Class::where('id', $id)->firstOrFail();

        //sends the user to the show page with the class they clicked on
        return view('classes.show')->with('class', $class);
    }

    /**
     * Show the form for editing the specified class
     */
    public function edit(PRA_Class $class)
    {
        //finds the class entry in the database 
        //$class = Class::where('CLASS_ID', $id)->firstOrFail();

        //sends the user to the edit page with the class they clicked on
        return view('classes.edit')->with('class', $class);
    }

    /**
     * Update the specified class in the class table
     */
    public function update(Request $request, PRA_Class $class)
    {
        //finds the class entry in the database 
        //$class = Class::where('id', $id)->firstOrFail();

        //updates the DB entry
        $class->update([
            'id' => $request->classID,
            'CLASS_NAME' => $request->className,
            'CLASS_DOCS' => $request->classDocs,
            'CLASS_MAX_SEATS' => $request->classMax,
            'CLASS_FEE' => $request->classFee
        ]);

        //sends the user to the show page with the edited class
        return to_route('admin.classes.index', $class);
    }

    /**
     * Soft Delete the class
     */
    public function destroy(PRA_Class $class)
    {
        //
    }
}