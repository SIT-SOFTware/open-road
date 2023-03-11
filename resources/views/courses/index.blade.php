<x-app-layout>

<x-slot name="content">
    <div>
        
        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>

        <!-- Checks to see if the user is looking at the list of non-trashed courses -->
        @if(request()->routeIs('admin.courses.index'))
        <!-- Add Course Button and conditional render-->
        <a href="{{ route('admin.courses.create') }}" class="btn btn-black">Add Course</a>

        <!-- Go to trashed courses -->
        <a href="{{ route('admin.trashed.courses.index') }}" class="btn btn-danger">Trashed</a>
        @endif

        <!-- Checks to see if the user is looking at trashed courses -->
        @if(request()->routeIs('admin.trashed.courses.*'))

        <!-- Add back button to return from trashed page -->
        <a href="{{ route('admin.courses.index') }}" class="btn btn-danger">Back to Courses</a>
        @endif

        <!-- Prints every course stored in the DB -->
        @forelse ( $courses as $course )
        <div class="border rounded p-3 bg-black text-white">
            <!-- Clicking the course name displays that course on its own page -->
            <!-- If course is trashed, don't display the course separately -->
            <div class="row align-items-center">
                <div class="col-2">
                    <a style="font-size: 2.0rem; col-4 pr-10"
                    
                    @if(request()->routeIs('admin.courses.index'))
                        href="{{ route('admin.courses.show', $course) }}" 
                    @endif
                    >{{ $course->COURSE_NAME }}</a>
                    </div>

                    @if(request()->routeIs('admin.trashed.courses.*'))
                    <span class="col-6 align-bottom">
                            <strong>Deleted: </strong> {{ $course->deleted_at->diffForHumans() }}
                    </span>

                    <form action="{{ route('admin.trashed.courses.update', $course) }}" method="post" class="col-1">
                        @method('put')
                        @csrf
                        <button class="btn btn-success text-white col-12"><i class="bi bi-recycle"></i></button>
                    </form>
                    <form action="{{ route('admin.trashed.courses.destroy', $course) }}" method="post" class="col-1">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger text-white col-12"><i class="bi bi-trash3"></i></button>
                    </form>
                    @endif
            </div>
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