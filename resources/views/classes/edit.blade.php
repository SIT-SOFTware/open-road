<x-app-layout>
    
<!-- This page is not done :) -->

    <x-slot name="content">
        <div>
            <form action="{{ route('admin.classes.update', $class) }}" class="border rounded p-3 bg-grey text-black" method="post">
                @method('put')
                @CSRF
                    <a style="font-size: 2.0rem;">Edit {{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}</a>
                    <div class="row">
                        <!-- Class ID Edit -->

                        <div class="col">
                            <div class="font-weight-bold"><u>Class Code:</u></div>
                            <x-input 
                            type="number" 
                            name="classCode" 
                            placeholder="Class Code"
                            field="classCode"
                            :value="@Old('classCode', $class->CLASS_ID)"></x-input>
                        </div>
                        <!-- TODO: figure out how to get course dropdown here with initially selected course selected -->
                        <!-- TODO: Add conditional rendering to make Course ID input inactive if registrations exist -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Code:</u></div>
                            <x-input
                            type="text" 
                            name="courseID" 
                            placeholder="Course Code"
                            field="courseID"
                            :value="@Old('courseID', $class->COURSE_ID)"></x-input>
                        </div>
                        <!-- TODO: Put instructor dropdown here -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Instructor Code (for now):</u></div>
                            <x-input 
                            type="text" 
                            name="instructorID" 
                            placeholder="Primary Instructor"
                            field="instructorID"
                            :value="@Old('instructorID', $class->PRIMARY_INST)"></x-input>
                        </div>
                        <!-- TODO: Put old start date in this field -->
                        <div class="col-sm">
                            <div class="font-weight-bold"><u>Class Start</u></div>
                            <input 
                            type="date"
                            id="startDate"
                            name="startDate"
                            :value="@Old('startDate', $class->CLASS_START)">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Save Class</button>
            </form>
        </div>
    </x-slot>
    
    </x-app-layout>