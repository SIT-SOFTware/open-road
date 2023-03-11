<x-app-layout>

    <x-slot name="content">
            
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-11">
                    <div class="card shadow-lg bg-dark text-white">
                        <div class="card-body">
        
                            <form action="{{ route('admin.classes.store') }}" class="" method="POST">
                                @csrf
                                
                                <!-- Title -->
                                <h1 class="card-title text-center mb-5 mt-4">New Class</h1>
        
                                <div class="row justify-content-center my-4">
                                    
                                    <!-- Course Selection Dropdown -->
                                    <div class="col-md-5 mb-4 mb-md-5 col-9">
                                        <div class="input-group">
                                            <label class="input-group-text" for="courseID">Course</label>
                                            <select class="form-control" id="CourseID" name="courseID">
                                            <option selected>Select a Course</option>
                                                @foreach($courses as $course)
                                                    <option value="{{ $course->COURSE_ID }}">{{ $course->COURSE_NAME }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
        
                                    <!-- Instructor Select -->
                                    <div class="col-md-5 mb-4 col-9 offset-md-1">
                                        <div class="input-group">
                                            <label class="input-group-text" for="InstructorID">Instructor</label>
                                            <select class="form-control" id="InstructorID" name="instructorID">
                                            <option selected>Select an Instructor</option>
                                                @foreach($stuff as $instructor)
                                                    <option value="{{ $instructor->STUFF_ID }}">{{ $instructor->STUFF_FNAME }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                
                                    <!-- Class Code input -->
                                    <div class="col-md-5 mb-4 col-9">
                                        <div class="input-group">
                                            <label class="input-group-text" for="classCode">Class Code</label>
                                            <input required class="form-control" type="number" name="classCode" id="classCode" placeholder="Code Number"/>
                                        </div>
                                    </div>
        
                                    <!-- Class Start Selection -->
                                    <div class="col-md-5 mb-4 col-9 offset-md-1">
                                        <div class="input-group">
                                            <label class="input-group-text">Class Start</label>
                                            <input required class="form-control" type="date" id="startDate" name="startDate">
                                        </div>
                                    </div>
        
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="row justify-content-center pe-2">
                                    <div class="col text-md-end text-center mb-3">
                                        <button type="submit" class="btn btn-danger my-4 me-md-4">Create Class</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
    
    </x-app-layout>