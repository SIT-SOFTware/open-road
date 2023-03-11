<x-app-layout>
<!-- Shows individual course to user -->
    <x-slot name="content">
        <div>

            <!-- Displays if course has not been trashed -->
            @if(!$course->trashed())

            <div class="border rounded p-3 bg-grey text-black">
                <div class="row">

                    <!-- Created/Updated at -->
                    <p class="col opacity-70">
                        <strong>Created: </strong> {{ $course->created_at->diffForHumans() }}
                    </p>

                    <p class="col-10 opacity-70 ml-4">
                        <strong>Updated: </strong> {{ $course->updated_at->diffForHumans() }}
                    </p>

                    <!-- Displays Course Name -->
                    <a href="" style="font-size: 2.0rem;">{{ $course->COURSE_NAME }}</a>

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
        </div>

        <div class="row">
        <!-- Brings the user to the edit page and passes the course with it -->
        <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-dark text-white col-1">Edit Course</a>
        <form action="{{ route('admin.courses.destroy', $course) }}" method="post" class="col-1">
            @method('delete')
            @csrf
            <button class="btn btn-danger text-white col-12"><i class="bi bi-trash3"></i></button>
        </form>
        </div>


            <!-- Displays if course has been trashed -->
            @else

            <div class="border rounded p-3 bg-grey text-black">
                <div class="row">

                    <!-- Deleted at -->
                    <p class="col-10 opacity-70 ml-4">
                        <strong>Deleted: </strong> {{ $course->deleted_at->diffForHumans() }}
                    </p>

                    <!-- Displays Course Name -->
                    <a href="" style="font-size: 2.0rem;">{{ $course->COURSE_NAME }}</a>

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
                <a href="{{ route('admin.trashed.courses.restore', $course) }}" class="btn btn-primary text-white">Restore Course</a>
                <a href="{{ route('admin.trashed.courses.destroy', $course) }}" class="btn btn-danger text-white">Delete Course</a>
            </div>
            @endif
        </div>
    </x-slot>
    
    </x-app-layout>