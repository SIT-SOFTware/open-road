<x-app-layout>

<x-slot name="content">
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>  

    <div class="container text-white">

        <!-- Title -->
        <h1 class="text-dark text-center mt-3">Available Classes</h2>
        <hr class="border border-dark" />

        <a href="{{ route('admin.classes.create') }}" class="btn btn-success p-2 mt-4 mb-2 fs-5">Add Class</a>
        @foreach ( $classes as $class )
            
            <!-- Clicking anywhere on the card sends you directly to the edit page for that card -->
            <a href="{{ route('admin.classes.edit', $class) }}" class="text-customWhite text-decoration-none">
                <div class="row justify-content-center mb-3">
                    <div class="col">
                        <div class="card bg-dark p-3 pb-5 shadow-lg">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-10 my-3">
                                        <h1 class="card-heading text-decoration-underline text-center">{{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}</h1>
                                    </div>
                                </div>
                                <div class="row text-center text-white justify-content-around fs-4">

                                        <!-- Class Code -->
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Class Code: </span>{{ $class->CLASS_ID }}
                                    </div>
                                        <!-- Course ID and Course Name -->
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Course ID/Name: </span>{{ $class->COURSE_ID }}/{{ $courseName[$class->COURSE_ID] }}
                                    </div>

                                        <!-- Displays Instructor name -->
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Instructor: </span>{{ $instID[$class->PRIMARY_INST]; }}
                                    </div>

                                        <!-- Start Date -->
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Start Date: </span>{{ Str::limit($class->CLASS_START, 10, '') }}
                                    </div>

                                        <!-- End Date -->
                                    <div class="col-auto">
                                        <span class="pe-2"> End Date: </span>{{ Str::limit($class->CLASS_END, 10, '') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</x-slot>

</x-app-layout>