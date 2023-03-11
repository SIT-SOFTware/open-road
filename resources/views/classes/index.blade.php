<x-app-layout>

<x-slot name="content">
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>  

    <div class="container text-white">
        <a href="{{ route('admin.classes.create') }}" class="btn btn-dark p-2 mt-4 mb-2 fs-5">Add Class</a>
        @foreach ( $classes as $class )
            <a href="{{ route('admin.classes.show', $class) }}" class="text-red text-decoration-none">
                <div class="row justify-content-center mb-3">
                    <div class="col">
                        <div class="card bg-dark p-3 pb-5 shadow-lg">
                            <div class="card-body">
                                <form action="">
                                    <div class="row justify-content-center">
                                        <div class="col-10 mb-3">
                                            <h1 class="card-heading text-decoration-underline text-center">{{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}</h1>
                                        </div>
                                    </div>
                                    <div class="row text-center text-white justify-content-around fs-4">

                                        <!-- Class Code -->
                                        <div class="col-auto mb-2">
                                            <span class="pe-2"> Class Code: </span>{{ $class->CLASS_ID }}
                                        </div>
                                        <!-- Course ID -->
                                        <div class="col-auto mb-2">
                                            <span class="pe-2"> Course ID: </span>{{ $class->COURSE_ID }}
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</x-slot>

</x-app-layout>