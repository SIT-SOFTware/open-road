<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Stuff;
use App\Models\Course;
use App\Models\PRA_Class;
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
        $stuff = Stuff::all();
        $instArray = [];

        // puts instructors into an associative array in the format Array[instID] = "instName"
        foreach($classes as $class){
            $instID = $stuff->where('STUFF_ID', $class->PRIMARY_INST);

            $instArray[$class->PRIMARY_INST] = $instID->first()->STUFF_FNAME;
        }

        return view('classes.index')
            ->with('classes', $classes)
            ->with('stuff', $stuff)
            ->with('instID', $instArray);
    }

    /**
     * Show the form for creating a new class
     */
    public function create()
    {
        $courses = Course::all()->sortBy('id');
        $stuff = Stuff::all()->where('STUFF_LEVEL', 1)->sortBy('STUFF_FNAME');
        //$stuff = Course::all()->sortBy('id');
        return view('classes.create')
            ->with('courses', $courses)
            ->with('stuff', $stuff);
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
        $stuff = Stuff::all();

        //sends the user to the show page with the class they clicked on
        return view('classes.show')
            ->with('class', $class)
            ->with('stuff', $stuff);
    }

    /**
     * Show the form for editing the specified class
     */
    public function edit(PRA_Class $class)
    {
        $courses = Course::all()->sortBy('id');
        $stuff = Stuff::all();

        $courseName = $courses->where('COURSE_ID', $class->COURSE_ID);
        $instName = $stuff->where('STUFF_ID', $class->PRIMARY_INST);

        //sends the user to the edit page with the class they clicked on
        return view('classes.edit')
            ->with('class', $class)
            ->with('stuff', $stuff)
            ->with('courses', $courses)
            ->with('courseName', $courseName)
            ->with('instName', $instName);
    }

    /**
     * Update the specified class in the class table
     */
    public function update(Request $request, PRA_Class $class)
    {
        $endDate = Carbon::createFromFormat('Y-m-d', $request->startDate);
        
        $endDate = $endDate->addDays(3);

        //updates the DB entry
        $class->update([
            'COURSE_ID' => $request->courseID,
            'CLASS_ID' => $request->classCode,
            'PRIMARY_INST' => $request->instructorID,
            'CLASS_START' => $request->startDate,
            'CLASS_END' => $endDate,
        ]);

        //sends the user to the show page with the edited class
        return to_route('admin.classes.index', $class);
    }

    /**
     * Soft Delete the class
     */
    public function destroy(PRA_Class $class)
    {
        $class->delete();

        return to_route('admin.classes.index')
            ->with('success', 'Moved to Trash!');
    }
}