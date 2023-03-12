<x-app-layout>

    <x-slot name="content">

        <div class="container my-4 text-white">
            
            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Edit Courses</h2>
            <hr class="border border-dark" />

            <a href="{{ route('admin.courses.create') }}" class="btn btn-success p-2 mt-4 mb-2 fs-5">Add Course</a>

            @foreach ( $courses as $course )
                <div class="row justify-content-center mb-3">
                    <div class="col">
                        <div class="card bg-dark p-3  shadow-lg">
                            <div class="card-body">
                                
                                <form action="{{ route('admin.courses.update', $course) }}" method="post">
                                    <form action="{{ route('admin.courses.update', $course) }}" method="post">
                                        @method('put')
                                        @csrf
                                        
                                        <!--Page Heading -->
                                        <div class="row justify-content-center">
                                            <div class="col-10 my-3">
                                                <h1 class="card-heading text-white text-center">Editing Course: &nbsp;{{ $course->COURSE_NAME }}</h1>
                                            </div>
                                        </div>
            
                                        <!-- Name Input -->
                                        <div class="row justify-content-center ">
                                            <div class="col-lg-4 col-8 mb-lg-2 mt-lg-4 mb-4">
                                                <div class="input-group">
                                                    <label class="input-group-text">Name</label>
                                                    <input required class="form-control" type="text" value="{{ @Old('courseName', $course->COURSE_NAME) }}" name="classCode">
                                                </div>
                                            </div>
            
                                        </div>
                                        
                                        <div class="row mt-lg-4 justify-content-center">
            
                                            <!-- Course ID Input -->
                                            <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                                <div class="input-group">
                                                    <label class="input-group-text">Course ID</label>
                                                    <input required class="form-control" type="number" value="{{ @Old('courseID', $course->COURSE_ID) }}" name="classCode">
                                                </div>
                                            </div>
            
                                        
                                            <!-- Max Seats Input -->
                                            <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                                <div class="input-group">
                                                    <label class="input-group-text">Max Seats</label>
                                                    <input required class="form-control" type="number" value="{{ @Old('courseMax', $course->COURSE_MAX_SEATS) }}" name="courseID">
                                                </div>
                                            </div>
                                            
                                            <!-- Course Price Input -->
                                            <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                                <div class="input-group">
                                                    <label class="input-group-text">Course Fee</label>
                                                    <input required class="form-control" type="number" value="{{ @Old('courseFee', $course->COURSE_FEE) }}" name="startDate">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Course Document Upload -->
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 col-8 mb-lg-2 mb-4 text-center">
                                                <label class="text-decoration-underline my-3 fs-5">Course Documents</label>
                                                <input id="courseDocsInput" type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row justify-content-lg-end justify-content-center my-lg-4 my-3">
                                            
                                            <!-- Save & Delete Buttons -->
                                            <div class="col-auto">
                                                <button class="btn btn-danger text-white px-3 me-3 mt-4 fs-5" onclick="return confirm('Do you want to trash this course?')"><i class="bi bi-trash3"></i></button>
                                                <a href="{{ route('admin.courses.update', $course) }}" class="btn btn-success px-2 me-3 mt-4 fs-5">Save Changes</a>
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