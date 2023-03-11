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

    public function update(){

    }

    public function destroy(){

    }

}
