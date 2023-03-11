<x-app-layout>
 
<!-- This page is not done :) 8==D ~ you know who ;) ~ -->

<x-slot name="content">
    
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
                                        <div class="col-auto">
                                            <span class="pe-2"> Class Code: </span>{{ $class->CLASS_ID }}
                                        </div>
                                        <div class="col-auto">
                                            <span class="pe-2"> Course ID: </span>{{ $class->COURSE_ID }}
                                        </div>
                                        <div class="col-auto">
                                            <span class="pe-2"> Instructor: </span>{{ $class->PRIMARY_INST }}
                                        </div>
                                        <div class="col-auto">
                                            <span class="pe-2"> Start Date: </span>{{ Str::limit($class->CLASS_START, 10, '') }}
                                        </div>
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
    
    
    {{-- 
        **TODO Whover coded this originally pls review and delete commented code when you think changes are fine
        <div>
        <a href="{{ route('admin.classes.create') }}" class="">Add Class</a>
        @foreach ( $classes as $class )
            <div class="border rounded p-3 bg-black text-white">
                <a href="{{ route('admin.classes.show', $class) }}" style="font-size: 2.0rem;">{{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}</a>
                <div class="row">

                    <!-- Class Code -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Class Code:</u></div>
                        <div>{{ $class->CLASS_ID }}</div>
                    </div>

                    <!-- Course ID -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Course ID:</u></div>
                        <div>{{ $class->COURSE_ID }}</div>
                    </div>

                    <!-- TODO: Display name instead of instructor ID -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Instructor: </u></div>
                        <div>{{ $class->PRIMARY_INST }}</div>
                    </div>

                    <!-- Start Date -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Start Date:</u></div>
                        <div>{{ Str::limit($class->CLASS_START, 10, '') }}</div>
                    </div>

                    <!-- End Date -->
                    <div class="col">
                        <div class="font-weight-bold"><u>End Date:</u></div>
                        <div>{{ Str::limit($class->CLASS_END, 10, '') }}</div>
                    </div>
                </div>
            </div>          
        @endforeach
    </div> --}}

</x-slot>

</x-app-layout>