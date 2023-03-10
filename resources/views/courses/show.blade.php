<x-app-layout>
<!-- Shows individual course to user -->
    <x-slot name="content">
        <div>
            <div class="border rounded p-3 bg-grey text-black">
                @csrf
                    <a href="" style="font-size: 2.0rem;">{{ $course->COURSE_NAME }}</a>
                    <div class="row">
                        <!-- Displays course ID -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Course ID:</u></div>
                        <div>{{ $course->COURSE_ID }}</div>
                    </div>
                    <!-- Will display Course docs -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Course Documents:</u></div>
                        <div>{{ $course->COURSE_DOCS }}</div>
                    </div>
                    <!-- Displays course seats -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Course Max Seats:</u></div>
                        <div>{{ $course->COURSE_MAX_SEATS }}</div>
                    </div>
                    <!-- Displays course fee -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Course Fee:</u></div>
                        <div>{{ $course->COURSE_FEE }}</div>
                    </div>
                </div>
                </div>
                <!-- Brings the user to the edit page and passes the course with it -->
                <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-dark">Edit Course</a>
            </div>
        </div>
    </x-slot>
    
    </x-app-layout>