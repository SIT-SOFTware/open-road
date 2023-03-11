<x-app-layout>

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

                        <!-- TODO: Add conditional rendering to make Course ID input inactive if registrations exist -->
                        <div class="input-group">
                            <label class="input-group-text" for="courseID">Course</label>
                            <select class="form-control" id="CourseID" name="courseID">
                            <option selected :value="@Old('courseID', $class->COURSE_ID)">{{ $courseName->first()->COURSE_NAME }}</option>
                                @forelse($courses as $course)

                                @if($course->COURSE_ID == @Old('courseID', $class->COURSE_ID))
                                    <!-- Don't print an option if it's the one that's already been selected -->
                                @else
                                    <option value="{{ $course->COURSE_ID }}">{{ $course->COURSE_NAME }}</option>
                                @endif
                                
                                @endforeach
                            </select>
                        </div>

                        <!-- Instructor dropdown with existing instructor automatically selected -->
                        <div class="input-group">
                            <label class="input-group-text" for="InstructorID">Instructor</label>
                            <select class="form-control" id="InstructorID" name="instructorID">
                            <option selected :value="@Old('instructorID', $class->PRIMARY_INST)">{{ $instName->first()->STUFF_FNAME }}</option>
                                @forelse($stuff as $instructor)

                                @if($instructor->STUFF_ID == @Old('instructorID', $class->PRIMARY_INST))
                                    <!-- Don't print an option if it's the one that's already been selected -->
                                @else
                                    <option value="{{ $instructor->STUFF_ID }}">{{ $instructor->STUFF_FNAME }}</option>
                                @endif

                                @endforeach
                            </select>
                        </div>
                        <!-- TODO: Put old start date in this field -->
                        <input type="hidden" value="{{  $startDate = \Carbon\Carbon::parse($class->CLASS_START)->format('Y-m-d')    }}">
                        <div class="col-sm">
                            <div class="font-weight-bold"><u>Class Start</u></div>
                            <input 
                            type="date"
                            id="startDate"
                            name="startDate"
                            :value="@Old('startDate', $startDate)">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Save Class</button>
            </form>
        </div>
    </x-slot>
    
    </x-app-layout>