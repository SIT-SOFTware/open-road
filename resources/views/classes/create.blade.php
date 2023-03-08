<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            <form action="{{ route('admin.classes.store') }}" class="border rounded p-3 bg-grey text-black" method="post">
                @csrf
                    <a href="" style="font-size: 2.0rem;">New Class</a>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3 pt-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="CourseID">Course</label>
                                </div>
                                <select class="custom-select col-6" id="CourseID">
                                    <option selected>Choose Course</option>
                                    @foreach($courses as $course)
                                    <option value="$course->id" name="courseID">{{ $course->COURSE_NAME }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="font-weight-bold"><u>Class Code:</u></div>
                            <input type="number" name="classCode" placeholder="Class Code">
                        </div>
                        <div class="col">
                            <div class="input-group mb-3 pt-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="InstructorID">Instructor</label>
                                </div>
                                <select class="custom-select col-6" id="InstructorID">
                                    <option selected>Choose Primary Instructor</option>
                                    @foreach($stuff as $stuf)
                                    <option value="$stuf->id" name="instructorID">{{ $stuf->STUFF_FNAME }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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