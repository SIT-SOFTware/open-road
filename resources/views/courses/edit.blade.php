<x-app-layout>
 
    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            <form action="{{ route('admin.courses.update', $course) }}" class="border rounded p-3 bg-grey text-black" method="post">
                @method('put')
                @CSRF
                    <a href="" style="font-size: 2.0rem;">Edit {{ $course->COURSE_NAME }}</a>
                    <div class="row">
                        <div class="col">
                            <div class="font-weight-bold"><u>Course ID:</u></div>
                            <x-input 
                            type="number" 
                            name="courseID" 
                            placeholder="Course ID"
                            field="courseID"
                            :value="@Old('courseID', $course->id)"></x-input>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Name:</u></div>
                            <x-input 
                            type="text" 
                            name="courseName" 
                            placeholder="Course Name"
                            field="courseName"
                            :value="@Old('courseName', $course->COURSE_NAME)"></x-input>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Documents:</u></div>
                            <div>Docs</div>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Max Seats:</u></div>
                            <x-input 
                            type="number" 
                            name="courseMax" 
                            placeholder="Max Seats"
                            field="courseMax"
                            :value="@Old('courseMax', $course->COURSE_MAX_SEATS)"></x-input>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Fee:</u></div>
                            <x-input 
                            type="number" 
                            name="courseFee" 
                            placeholder="Course Fee"
                            field="courseFee"
                            :value="@Old('courseFee', $course->COURSE_FEE)"></x-input>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Save Course</button>
            </form>
        </div>
    </x-slot>
    
    </x-app-layout>