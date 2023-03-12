<x-app-layout>

    <x-slot name="content">

        <div class="container my-4 text-white">
            
            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Edit Classes</h2>
            <hr class="border border-dark" />
            
            <a href="{{ route('admin.classes.create') }}" class="btn btn-success p-2 mt-4 mb-2 fs-5">Add Class</a>
            
            @foreach ( $classes as $class )
                <div class="row justify-content-center mb-3">
                    <div class="col">
                        <div class="card bg-dark p-3  shadow-lg">
                            <div class="card-body">
                                <form action="{{ route('admin.classes.update', $class) }}" method="post">
                                    @method('put')
                                    @csrf

                                    <!-- Class Title --> 
                                    <div class="row justify-content-center">
                                        <div class="col-10 my-3">
                                            
                                            <!--Clickable heading leads to individual record -->
                                            <h1 class="card-heading text-decoration-underline text-white text-center">
                                                <a href="{{ route('admin.classes.edit', $class) }}" class="text-customWhite">
                                                    {{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                    
                                    <!-- Class Code Input --> 
                                    <div class="row text-center text-white justify-content-lg-around justify-content-center fs-4">
                                        <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Class Code</label>
                                                <input required class="form-control" type="number" placeholder="{{ $class->CLASS_ID }}" name="classCode">
                                            </div>
                                        </div>

                                        <!-- Course ID Input --> 
                                        <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Course ID</label>
                                                <input required class="form-control" type="number" placeholder="{{ $class->COURSE_ID }}" name="courseID">
                                            </div>
                                        </div>

                                        <!-- Class Instructor Selector --> 
                                        <div class="col-lg-3 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text" for="instructorID">Instructor</label>
                                                <select class="form-control" id="instructorID" name="instructorID">
                                                    @foreach($stuff as $instructor)
                                                        <option @if($instructor->STUFF_ID == $class->PRIMARY_INST) selected="selected" @endif value="{{ $instructor->STUFF_ID }}">{{ $instructor->STUFF_FNAME }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Start Date Selector --> 
                                        <div class="col-lg-3 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Start Date</label>
                                                <input required class="form-control" onfocusout=(this.type="") onfocus=(this.type="date") type="" placeholder="{{ Str::limit($class->CLASS_START, 10, '') }}" name="startDate">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Submit Button --> 
                                    <div class="row justify-content-lg-end justify-content-center">
                                        <div class="col-auto">
                                            <a href="{{ route('admin.classes.update', $class) }}" class="btn btn-success px-2 me-3 mt-4 fs-5">Save Changes</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-slot>
    
</x-app-layout>