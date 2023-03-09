<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    /**
     * Show a list of all the courses
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new course
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created course in the course table
     */
    public function store(Request $request)
    {
        Course::create([
            'COURSE_ID' => $request->courseID,
            'COURSE_NAME' => $request->courseName,
            'COURSE_DOCS' => $request->courseDocs,
            'COURSE_MAX_SEATS' => $request->courseMax,
            'COURSE_FEE' => $request->courseFee
        ]);

        return to_route('admin.courses.index');
    }

    /**
     * Display a single course
     * Model-route binding should be working but for some reason it really doesn't want to
     */
    public function show(Course $course)
    {
        //finds the course entry in the database 
        //$course = Course::where('id', $id)->firstOrFail();

        //sends the user to the show page with the course they clicked on
        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified course
     */
    public function edit(Course $course)
    {
        //finds the course entry in the database 
        //$course = Course::where('COURSE_ID', $id)->firstOrFail();

        //sends the user to the edit page with the course they clicked on
        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified course in the course table
     */
    public function update(Request $request, Course $course)
    {
        //finds the course entry in the database 
        //$course = Course::where('id', $id)->firstOrFail();

        //updates the DB entry
        $course->update([
            'id' => $request->courseID,
            'COURSE_NAME' => $request->courseName,
            'COURSE_DOCS' => $request->courseDocs,
            'COURSE_MAX_SEATS' => $request->courseMax,
            'COURSE_FEE' => $request->courseFee
        ]);

        //sends the user to the show page with the edited course
        return to_route('admin.courses.index', $course);
    }

    /**
     * Soft Delete the course
     */
    public function destroy(Course $course)
    {
        //
    }
}
