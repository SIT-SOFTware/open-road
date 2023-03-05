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
     */
    public function show(Course $course)
    {

    }

    /**
     * Show the form for editing the specified course
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified course in the course table
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Soft Delete the course
     */
    public function destroy(Course $course)
    {
        //
    }
}
