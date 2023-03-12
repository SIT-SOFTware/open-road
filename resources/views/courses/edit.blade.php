<x-app-layout>

        <x-slot name="content">
    
            <div class="container my-4 text-white">
                <div class="card bg-dark p-3  shadow-lg">
                    <div class="card-body">
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
                                        <input required class="form-control" type="text" value="{{ @Old('courseName', $course->COURSE_NAME) }}" name="courseName">
                                    </div>
                                </div>

                            </div>
                            
                            <div class="row mt-lg-4 justify-content-center">

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
                                        <label class="input-group-text">Course Fee</label>
                                        <input required class="form-control" type="number" value="{{ @Old('courseFee', $course->COURSE_FEE) }}" name="courseFee">
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
                                <!-- Had to put the form close for edit between the save changes button and the trash button because
                                trash needs to be its own form. Needs some re-styling but it works as intended now -->
                            <div class="col-auto">
                            <button class="btn btn-success px-2 me-3 mt-4 fs-5">Save Changes</button>
                        </form>

                        <form action="{{ route('admin.courses.destroy', $course) }}" method="post" class="col-1">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger text-white col-12" onclick="return confirm('Do you want to trash this course?')"><i class="bi bi-trash3"></i></button>
                        </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>





        {{-- <div>
            <!-- Form updates changed data in the DB -->
            <form action="{{ route('admin.courses.update', $course) }}" class="border rounded p-3 bg-grey text-black" method="post">
                @method('put')
                @CSRF
                    <a href="" style="font-size: 2.0rem;">Edit {{ $course->COURSE_NAME }}</a>
                    <div class="row">
                        <!-- Course ID input with auto-fill from DB -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course ID:</u></div>
                            <x-input 
                            type="number" 
                            name="courseID" 
                            placeholder="Course ID"
                            field="courseID"
                            :value="@Old('courseID', $course->COURSE_ID)"></x-input>
                        </div>
                        <!-- Course Name input with auto-fill from db -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Name:</u></div>
                            <x-input 
                            type="text" 
                            name="courseName" 
                            placeholder="Course Name"
                            field="courseName"
                            :value="@Old('courseName', $course->COURSE_NAME)"></x-input>
                        </div>
                        <!-- Course doc uploads (eventually) -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Documents:</u></div>
                            <div>Docs</div>
                        </div>
                        <!-- Course Max Seats input -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Max Seats:</u></div>
                            <x-input 
                            type="number" 
                            name="courseMax" 
                            placeholder="Max Seats"
                            field="courseMax"
                            :value="@Old('courseMax', $course->COURSE_MAX_SEATS)"></x-input>
                        </div>
                        <!-- Course Fee Input -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Fee:</u></div>
                            <x-input 
                            type="number" 
                            name="courseFee" 
                            placeholder="Course Fee"
                            field="courseFee"
                            :value="@Old('courseFee', $course->COURSE_FEE)"></x-input>
                        </div>
                    </div>
                </div>
                <!-- Submits form to save course -->
                <button class="btn btn-primary">Save Course</button>
            </form>
        </div> --}}

    </x-slot>
    
</x-app-layout>