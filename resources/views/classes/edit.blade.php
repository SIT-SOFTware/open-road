<x-app-layout>

    <x-slot name="content">

        <div class="container my-4 text-white">

            <a href="{{ route('admin.classes.index') }}" class="btn btn-dark mb-2 px-2 me-3 mt-4 fs-5">View Classes</a>

            <div class="card bg-dark p-3 shadow-lg">
                <div class="card-body">
                    <form action="{{ route('admin.classes.update', $class) }}"  method="post">
                        @method('put')
                        @csrf

                        <!-- Class Title -->
                        <div class="row justify-content-center">
                            <div class="col-10 my-3">
                                <h1 class="card-heading text-white text-center">Editing Class: &nbsp;{{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}</h1>
                            </div>
                        </div>

                        <div class="row text-center text-white justify-content-lg-around justify-content-center fs-4">

                            <!-- Class Code Input -->
                            <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                <div class="input-group">
                                    <label class="input-group-text">Class Code</label>
                                    <input required class="form-control" type="number" placeholder="Class Code" name="classCode" value="{{ $class->CLASS_ID }}">
                                </div>
                            </div>

                            <!-- Course ID Input -->
                            <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                <div class="input-group">
                                    <label class="input-group-text" for="courseID">Course</label>
                                    <select class="form-control" id="CourseID" name="courseID">
                                    <option selected value="{{$courseName->first()->COURSE_ID}}">{{ $courseName->first()->COURSE_NAME }}</option>
                                        @forelse($courses as $course)

                                        @if($course->COURSE_ID == @Old('courseID', $class->COURSE_ID))
                                            <!-- Don't print an option if it's the one that's already been selected -->
                                        @else
                                            <option value="{{ $course->COURSE_ID }}">{{ $course->COURSE_NAME }}</option>
                                        @endif
                                        
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Instructor Selector -->
                            <div class="col-lg-3 col-8 mb-lg-2 mb-4">
                                <div class="input-group">
                                    <label class="input-group-text" for="InstructorID">Instructor</label>
                                    <select class="form-control" id="InstructorID" name="instructorID">
                                    <option selected :value="{{ $instName->first()->STUFF_ID }}">{{ $instName->first()->STUFF_FNAME }}</option>
                                        @forelse($stuff as $instructor)

                                            @if(!($instructor->STUFF_ID == @Old('instructorID', $class->PRIMARY_INST)))
                                                <!-- Don't print an option if it's the one that's already been selected -->
                                                <option value="{{ $instructor->STUFF_ID }}">{{ $instructor->STUFF_FNAME }}</option>
                                            @endif

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

                        <!-- Save Button -->
                        <div class="d-lg-inline text-center float-lg-end">
                            <button class="btn btn-success px-2 me-3 mt-4 fs-5">Save Changes</button>
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

    </x-slot>  
      
</x-app-layout>