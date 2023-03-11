<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class TrashedCourseController extends Controller
{
    //shows all trashed courses
    public function index(){

        $courses = Course::onlyTrashed()->latest('updated_at')->paginate(5);
        return view('courses.index')->with('courses', $courses);
    }

    //restores a trashed course
    public function update(Course $course){

        $course->restore();

        return to_route('admin.courses.index')->with('success', 'Course Restored!');
    }

    //permanently deletes a trashed course
    public function destroy(Course $course){

        $course->forceDelete();

        return to_route('admin.courses.index')->with('success', 'Course Permanently Deleted!');
    }

}
