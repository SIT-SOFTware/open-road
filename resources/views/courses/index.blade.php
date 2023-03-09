<x-app-layout>

<x-slot name="content">
    <div>
        <!-- Add Course Button -->
        <a href="{{ route('admin.courses.create') }}" class="btn btn-black">Add Course</a>
        <!-- Prints every course stored in the DB -->
        @foreach ( $courses as $course )
            <div class="border rounded p-3 bg-black text-white">
            <!-- Clicking the course name displays that course on its own page -->
                <a href="{{ route('admin.courses.show', $course) }}" style="font-size: 2.0rem;">{{ $course->COURSE_NAME }}</a>
                <div class="row">
                    <!-- Course ID Display -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Course ID:</u></div>
                        <div>{{ $course->id }}</div>
                    </div>
                    <!-- Course Docs Display (WIP) -->

                    <div class="col">
                        <div class="font-weight-bold"><u>Course Documents:</u></div>
                        <div>{{ $course->COURSE_DOCS }}</div>
                    </div>

                    <!-- Max Seats Display -->

                    <div class="col">
                        <div class="font-weight-bold"><u>Course Max Seats:</u></div>
                        <div>{{ $course->COURSE_MAX_SEATS }}</div>
                    </div>

                    <!-- Course Fee Display -->

                    <div class="col">
                        <div class="font-weight-bold"><u>Course Fee:</u></div>
                        <div>{{ $course->COURSE_FEE }}</div>
                    </div>
                </div>
            </div>          
        @endforeach
    </div>
</x-slot>

</x-app-layout>