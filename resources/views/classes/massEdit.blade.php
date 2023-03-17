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
                                        <div class="col-10 mb-3">
                                            
                                            <!--Clickable heading leads to individual record -->
                                            <h1 class="card-heading text-white text-center">
                                                <a href="{{ route('admin.classes.edit', $class) }}" class="text-customWhite text-decoration-none">
                                                    {{ $class->course->COURSE_NAME }}-{{ $class->CLASS_ID }}
                                                </a>
                                            </h1>
                                            
                                        </div>
                                    </div>
                                    
                                    <!-- Class Code Input --> 
                                    <div class="row text-center text-white justify-content-lg-around justify-content-center fs-4">
                                        <!-- Class Code Input -->
                                        <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Class Code</label>
                                                <input required class="form-control" type="number" placeholder="Class Code" name="classCode" value="{{  @Old('classID',$class->CLASS_ID) }}">
                                            </div>
                                        </div>

                                        <!-- Course ID Input -->
                                        <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text" for="courseID">Course</label>
                                                <select class="form-control" id="CourseID" name="courseID">
                                                    <option selected value="{{  @Old('courseID', $class->COURSE_ID) }}">{{ $class->course->COURSE_NAME }}</option>
                                                    @forelse($courses as $course)

                                                    @if($course->COURSE_ID == @Old('courseID', $class->COURSE_ID))
                                                        <!-- Don't print an option if it's the one that's already been selected -->
                                                    @else
                                                        <option value="{{  $course->COURSE_ID }}">{{ $course->COURSE_NAME }}</option>
                                                    @endif
                                                    
                                                    @endforeach
                                                </select>
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
                                                <input required class="form-control" type="date" value="{{  @Old('classDate',Str::limit($class->CLASS_START, 10, '')) }}" name="startDate">
                                            </div>
                                        </div>

                                    </div>
                        
                                    <!-- Attendance Stats -->
                                    <div class="d-lg-inline float-lg-start">
                                        <div class="col-12 mt-lg-4">
                                            <h3 class="card-heading text-white ps-lg-4 text-lg-start text-center">Attendees: TODO</h3>
                                            <!-- TODO foreach loop through students with this registration -->
                                        </div>
                                    </div>

                                    
                                    <!-- Save Button -->
                                    <div class="d-lg-inline text-center mt-4 float-lg-end">
                                        <button class="btn btn-success px-2 me-3 fs-5">Save Changes</button>
                                    </div>

                                </form>
                                
                                <!-- Delete Button --> 
                                <form action="{{ route('admin.classes.destroy', $class) }}" method="post" class="d-lg-inline text-center float-lg-end">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger px-3 me-3 mt-4 fs-5" onclick="return confirm('Do you want to trash this course?')"><i class="bi bi-trash3"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-slot>
    
</x-app-layout>