<x-app-layout>

<x-slot name="content">

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>  

    <div class="container text-white">

        <!-- Checks to see if the user is looking at the list of non-trashed courses -->
        @if(request()->routeIs('admin.courses.index'))

            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Available Courses</h1>
            <hr class="border border-dark"/>

            <!-- Add Course Button-->
            <a href="{{ route('admin.courses.create') }}" class="btn btn-success p-2 me-2 mt-4 mb-2 fs-5">Add Course</a>

            <!-- Go to trashed courses -->
            <a href="{{ route('admin.trashed.courses.index') }}" class="btn btn-danger p-2 mt-4 mb-2 fs-5">Trashed</a>

        <!-- If the user is looking at trashed courses -->
        @else

            <!-- Trash Title -->
            <h1 class="text-dark text-center mt-3">Trashed Courses</h2>
            <hr class="border border-dark" />

            <!--Back Button -->
            <a href="{{ route('admin.courses.index') }}" class="btn btn-dark p-2 mt-4 mb-2 fs-5">Back to Courses</a>

        @endif

        <!-- Prints every course stored in the DB -->
        @forelse ( $courses as $course )
            
            @if(!request()->routeIs('admin.trashed.courses.*'))
                <a href="{{ route('admin.courses.edit', $course) }}" class="text-customWhite text-decoration-none">
            @endif

                <div class="row justify-content-center mb-3">
                    <div class="col">
                        <div class="card bg-dark p-3 shadow-lg">
                            <div class="card-body">

                                <!-- Course Title -->
                                <div class="row justify-content-center">
                                    <div class="col-10 my-3">
                                        <h1 class="card-heading text-decoration-underline text-center">{{  $course->COURSE_NAME }}</h1>
                                    </div>
                                </div>

                                <!-- Course Details -->
                                <div class="row text-center text-white justify-content-around fs-4">
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Class ID: </span>{{  $course->COURSE_ID }}
                                    </div>
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Course Documents: </span>{{  $course->COURSE_DOCS }}
                                    </div>
                                    <div class="col-auto">
                                        <span class="pe-2"> Max Seats: </span>{{  $course->COURSE_MAX_SEATS }}
                                    </div>
                                    <div class="col-auto">
                                        <span class="pe-2"> Course Fee: </span>{{ $course->COURSE_FEE  }}
                                    </div>
                                </div>

                                <!-- Trashed Courses -->
                                @if(request()->routeIs('admin.trashed.courses.*'))
                                    
                                    <div class="row justify-content-lg-end justify-content-center mt-4">
                                        
                                        <!-- Deleted tag -->
                                        <div class="text-red col-lg-10 text-lg-start text-center">
                                            Deleted: {{ $course->deleted_at->diffForHumans() }}
                                        </div>
                                        
                                        <!-- Restore Button -->
                                        <div class="col-auto">
                                            <form action="{{ route('admin.trashed.courses.update', $course) }}" method="post" class="">
                                                @method('put')
                                                @csrf
                                                <button class="btn btn-success text-white"><i class="bi bi-recycle"></i></button>
                                            </form>
                                        </div>
                                        
                                        <!-- Delete button -->
                                        <div class="col-auto">
                                            <form action="{{ route('admin.trashed.courses.destroy', $course) }}" method="post" class="">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger text-white"><i class="bi bi-trash3"></i></button>
                                            </form>
                                        </div>

                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            @if(!request()->routeIs('admin.trashed.courses.*'))
                </a>
            @endif
            
        @endforeach
    </div>
</x-slot>

</x-app-layout>