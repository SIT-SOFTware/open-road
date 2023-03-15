<x-app-layout>

<x-slot name="content">
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>  

    <div class="container">

        @if(request()->routeIs('admin.classes.index'))

        <!-- Title -->
        <h1 class="text-dark text-center mt-3">Available Classes</h2>
        <hr class="border border-dark" />

        <!-- Add Class Button-->
        <a href="{{ route('admin.classes.create') }}" class="btn btn-success p-2 me-2 mb-2 fs-5">Add Class</a>

        <!-- Trashed Classes Button -->
        <a href="{{ route('admin.trashed.classes.index') }}" class="btn btn-danger p-2 mb-2 fs-5">Trashed</a>
        
        @else
        <!-- Title -->
        <h1 class="text-dark text-center mt-3">Trashed Classes</h2>
        <hr class="border border-dark" />

        <!-- Add back button to return from trashed page -->
        <a href="{{ route('admin.classes.index') }}" class="btn btn-dark p-2 mb-2 fs-5">Back to Classes</a>
        @endif



        @forelse ( $classes as $class )
            
            <!-- Clicking anywhere on the card sends you directly to the edit page for that card -->
            @if(!request()->routeIs('admin.trashed.classes.*'))
            <a href="{{ route('admin.classes.edit', $class) }}" class="text-customWhite text-decoration-none">
            @endif
                <div class="row justify-content-center mb-3">
                    <div class="col">
                        <div class="card bg-dark p-3 shadow-lg">
                            <div class="card-body">

                                <div class="row text-center justify-content-around fs-4">

                                        <!-- Class Code -->
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Class Code: </span>{{ $class->CLASS_ID }}
                                    </div>
                                    
                                        <!-- Course ID and Course Name -->
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Course: </span>{{ $courseName[$class->COURSE_ID] }}
                                    </div>

                                        <!-- Displays Instructor name -->
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Instructor: </span>{{ $instID[$class->PRIMARY_INST] }}
                                    </div>

                                        <!-- Start Date -->
                                    <div class="col-auto mb-2">
                                        <span class="pe-2"> Start Date: </span>{{ Str::limit($class->CLASS_START, 10, '') }}
                                    </div>

                                        <!-- End Date -->
                                    <div class="col-auto">
                                        <span class="pe-2"> End Date: </span>{{ Str::limit($class->CLASS_END, 10, '') }}
                                    </div>
                                    
                                    <!-- Capacity -->
                                    <div class="col-auto">
                                        <span class="pe-2"> Capacity: </span>TODO
                                    </div>

                                    @if(request()->routeIs('admin.trashed.classes.*'))
                                    
                                        <div class="row justify-content-lg-end justify-content-center mt-4">
                                            
                                            <!-- Deleted tag -->
                                            <div class="text-red col-lg-10 fs-6 text-lg-start text-center">
                                                Deleted: {{ $class->deleted_at->diffForHumans() }}
                                            </div>
                                            
                                            <!-- Restore and Delete buttons -->
                                            <div class="col-auto">
                                                <form action="{{ route('admin.trashed.classes.update', $class) }}" method="post" class="">
                                                    @method('put')
                                                    @csrf
                                                    
                                                    <button class="btn btn-success px-3 me-3 fs-5"><i class="bi bi-recycle"></i></button>
                                                </form>
                                            </div>
                                            
                                            <div class="col-auto">
                                                <form action="{{ route('admin.trashed.classes.destroy', $class) }}" method="post" class="">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger px-3 me-3 fs-5"><i class="bi bi-trash3"></i></button>
                                                </form>
                                            </div>
                                        </div>

                                    @endif
                                </div>
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