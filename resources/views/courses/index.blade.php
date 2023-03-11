<x-app-layout>

<x-slot name="content">
    <div>
        
        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>

        @if(request()->routeIs('admin.courses.index'))
        <!-- Add Course Button and conditional render-->
        <a href="{{ route('admin.courses.create') }}" class="btn btn-black">Add Course</a>

        <!-- Go to trashed courses -->
        <a href="{{ route('admin.trashed.courses.index') }}" class="btn btn-danger">Trashed</a>
        @endif

        @if(request()->routeIs('admin.trashed.courses.*'))

        <!-- Add back button to return from trashed page -->
        <a href="{{ route('admin.courses.index') }}" class="btn btn-danger">Back to Courses</a>
        @endif

        <!-- Prints every course stored in the DB -->
        @forelse ( $courses as $course )
            <div class="border rounded p-3 bg-black text-white">
            <!-- Clicking the course name displays that course on its own page -->
                <a style="font-size: 2.0rem;"
                @if(request()->routeIs('admin.courses.index'))
                    href="{{ route('admin.courses.show', $course) }}" 
                @else
                    href="{{ route('admin.trashed.courses.show', $course) }}"
                @endif
                 >{{ $course->COURSE_NAME }}</a>
                <div class="row">
                    <!-- Course ID Display -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Course ID:</u></div>
                        <div>{{ $course->COURSE_ID }}</div>
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