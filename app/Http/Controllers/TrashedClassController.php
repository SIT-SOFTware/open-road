<?php

namespace App\Http\Controllers;

use App\Models\Stuff;
use App\Models\Course;
use App\Models\PRA_Class;
use Illuminate\Http\Request;

class TrashedClassController extends Controller
{
        //shows all trashed courses
        public function index(){
            $courses = Course::all()->sortBy('id');
            $classes = PRA_Class::onlyTrashed()->latest('updated_at')->paginate(5);
            $stuff = Stuff::all();
            $instArray = [];
            $courseArray = [];
    
            
            foreach($classes as $class){
                // puts instructors into an associative array in the format Array[instID] = "instName"
                $instID = $stuff->where('STUFF_ID', $class->PRIMARY_INST);
    
                $instArray[$class->PRIMARY_INST] = $instID->first()->STUFF_FNAME;
    
                // puts courses into an associative array in the format Array[courseID] = "courseName"
                $courseName = $courses->where('COURSE_ID', $class->COURSE_ID);
    
                $courseArray[$class->COURSE_ID] = $courseName->first()->COURSE_NAME;
            }
    
            return view('classes.index')
                ->with('classes', $classes)
                ->with('courses', $courses)
                ->with('courseName', $courseArray)
                ->with('stuff', $stuff)
                ->with('instID', $instArray);
        }
    
        //restores a trashed course
        public function update(PRA_Class $class){
    
            $class->restore();
    
            return to_route('admin.classes.index')->with('success', 'Class Restored!');
        }
    
        //permanently deletes a trashed course
        public function destroy(PRA_Class $class){
    
            $class->forceDelete();
    
            return to_route('admin.classes.index')->with('success', 'Class Permanently Deleted!');
        }
}
