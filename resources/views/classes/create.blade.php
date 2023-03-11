<x-app-layout>

    <x-slot name="content">
        <div>
            <form action="{{ route('admin.classes.store') }}" class="border rounded p-3 bg-grey text-black" method="post" name="classForm">
                @csrf
                    <a href="" style="font-size: 2.0rem;">New Class</a>
                    <div class="row">
                        <!-- Dropdown for course selection -->
                        <div class="col">
                            <div class="input-group mb-3 pt-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CourseID">Course</label>
                                </div>
                                <select class="custom-select col-6" name='courseID' id="CourseID">
                                    <option selected>Choose Course</option>
                                    @foreach($courses as $course)
                                    <option value="{{ $course->COURSE_ID }}" name=>{{ $course->COURSE_NAME }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Class Code input -->
                        <div class="col-sm">
                            <div class="font-weight-bold"><u>Class Code:</u></div>
                            <input type="number" name="classCode" placeholder="Class Code">
                        </div>
                        <!-- Innstructor Select -->
                        <div class="col">
                            <div class="input-group mb-3 pt-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="InstructorID">Instructor</label>
                                </div>
                                <select class="custom-select col-6" id="InstructorID" name="instructorID">
                                    <option selected>Choose Primary Instructor</option>
                                    @foreach($stuff as $stuf)
                                    <option value="{{ $stuf->STUFF_ID }}">{{ $stuf->STUFF_FNAME }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Class Start Selection -->
                        <div class="col-sm">
                            <div class="font-weight-bold"><u>Class Start</u></div>
                            <input type="date" id="startDate" name="startDate">
                        </div>
                    </div>
                </div>
                <x-button class="rounded bg-black">Create Class</x-button>
            </form>
        </div>
    </x-slot>
    
    </x-app-layout>