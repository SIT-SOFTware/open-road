<x-app-layout>

    <x-slot name="content">

        <div class="container my-4">
            
            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Edit Courses</h2>
            <hr class="border border-dark" />

            <a href="{{ route('admin.courses.create') }}" class="btn btn-success p-2 mt-2 mb-2 fs-5">Add Course</a>

            @foreach ( $courses as $course )
                <div class="row justify-content-center mb-3">
                        <div class="card bg-dark p-3  shadow-lg">
                            <div class="card-body">
                                
                                <form action="{{ route('admin.courses.update', $course) }}" method="post">
                                    @method('put')
                                    @csrf
                                    
                                    <!--Page Heading -->
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <a href="{{ route('admin.courses.edit', $course) }}" class="text-customWhite text-decoration-none">
                                                <h1 class="card-heading text-center">Editing Course: &nbsp;{{ $course->COURSE_NAME }}</h1>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-4 justify-content-center">
                
                                        <!-- Course ID Input -->
                                        <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Course ID</label>
                                                <input required class="form-control" type="number" value="{{ @Old('courseID', $course->COURSE_ID) }}" name="courseID">
                                            </div>
                                        </div>
                
                                    
                                        <!-- Max Seats Input -->
                                        <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Max Seats</label>
                                                <input required class="form-control" type="number" value="{{ @Old('courseMax', $course->COURSE_MAX_SEATS) }}" name="courseMax">
                                            </div>
                                        </div>
                                        
                                        <!-- Course Price Input -->
                                        <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Price</label>
                                                <input required class="form-control" type="number" value="{{ @Old('courseFee', $course->COURSE_FEE) }}" name="courseFee">
                                            </div>
                                        </div>
                                        
                                        <!-- Course Document Upload -->
                                        <div class="col-lg-3 col-8 mb-lg-2 mb-4">
                                            <input id="courseDocsInput" type="file" class="form-control">
                                        </div>
                                        
                                        <div class="col-lg-3 col-8 mb-lg-2 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Name</label>
                                                <input required class="form-control" type="text" value="{{ @Old('courseName', $course->COURSE_NAME) }}" name="courseName">
                                            </div>
                                        </div>
                
                                    </div>
                
                                    <!-- Name Input -->
                                    <div class="row justify-content-center ">
                                        <div class="col-lg-4 col-8 mb-lg-2 mt-lg-4 mb-4">
                                        </div>
                
                                    </div>
                                    
                                    <!-- Save Button -->
                                    <div class="d-lg-inline text-center float-lg-end">
                                        <button class="btn btn-success px-2 fs-5">Save Changes</button>
                                    </div>
                
                                </form>
                            
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.courses.destroy', $course) }}" method="post" class="d-lg-inline text-center float-lg-end">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger px-3 fs-5 me-lg-3 mt-lg-0 mt-3 " onclick="return confirm('Do you want to trash this course?')"><i class="bi bi-trash3"></i></button>
                                    </form>
                            </div>
                        </div>
                </div>
                
            @endforeach
        </div>
    </x-slot>
    
</x-app-layout>