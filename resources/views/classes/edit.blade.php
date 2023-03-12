<x-app-layout>
    
<!-- This page is not done :) -->

    <x-slot name="content">

        <div class="container my-4 text-white">
            <div class="row justify-content-center mb-3">
                <div class="col">
                    <div class="card bg-dark p-3  shadow-lg">
                        <div class="card-body">
                            <form action="{{ route('admin.classes.update', $class) }}" method="post">
                                @method('put')
                                @csrf

                                <div class="row justify-content-center">
                                    <div class="col-10 my-3">
                                        <h1 class="card-heading text-decoration-underline text-white text-center">{{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}</h1>
                                    </div>
                                </div>
                                <div class="row text-center text-white justify-content-lg-around justify-content-center fs-4">
                                    <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                        <div class="input-group">
                                            <label class="input-group-text">Class Code</label>
                                            <input required class="form-control" type="number" placeholder="{{ $class->CLASS_ID }}" name="classCode">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-8 mb-lg-2 mb-4">
                                        <div class="input-group">
                                            <label class="input-group-text">Course ID</label>
                                            <input required class="form-control" type="number" placeholder="{{ $class->COURSE_ID }}" name="courseID">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-8 mb-lg-2 mb-4">
                                        <div class="input-group">
                                            <label class="input-group-text" for="instructorID">Instructor</label>
                                            <select class="form-control" id="instructorID" name="instructorID">
                                                @foreach($stuff as $instructor)
                                                    <option value="{{ $instructor->STUFF_ID }}">{{ $instructor->STUFF_FNAME }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-8 mb-lg-2 mb-4">
                                        <div class="input-group">
                                            <label class="input-group-text">Start Date</label>
                                            <input required class="form-control" onfocusout=(this.type="") onfocus=(this.type="date") type="" placeholder="{{ Str::limit($class->CLASS_START, 10, '') }}" name="startDate">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-lg-end justify-content-center">
                                    <div class="col-auto">
                                        <a href="{{ route('admin.classes.create') }}" class="btn btn-success px-2 me-3 mt-4 fs-5">Save Changes</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{-- <div>

            *TODO Please review changes and remove commented code.

            <form action="{{ route('admin.classes.update', $class) }}" class="border rounded p-3 bg-grey text-black" method="post">
                @method('put')
                @CSRF
                    <a style="font-size: 2.0rem;">Edit {{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}</a>
                    <div class="row">
                        <!-- Class ID Edit -->

                        <div class="col">
                            <div class="font-weight-bold"><u>Class Code:</u></div>
                            <x-input 
                            type="number" 
                            name="classCode" 
                            placeholder="Class Code"
                            field="classCode"
                            :value="@Old('classCode', $class->CLASS_ID)"></x-input>
                        </div>
                        <!-- TODO: figure out how to get course dropdown here with initially selected course selected -->
                        <!-- TODO: Add conditional rendering to make Course ID input inactive if registrations exist -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Code:</u></div>
                            <x-input
                            type="text" 
                            name="courseID" 
                            placeholder="Course Code"
                            field="courseID"
                            :value="@Old('courseID', $class->COURSE_ID)"></x-input>
                        </div>
                        <!-- TODO: Put instructor dropdown here -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Instructor Code (for now):</u></div>
                            <x-input 
                            type="text" 
                            name="instructorID" 
                            placeholder="Primary Instructor"
                            field="instructorID"
                            :value="@Old('instructorID', $class->PRIMARY_INST)"></x-input>
                        </div>
                        <!-- TODO: Put old start date in this field -->
                        <div class="col-sm">
                            <div class="font-weight-bold"><u>Class Start</u></div>
                            <input 
                            type="date"
                            id="startDate"
                            name="startDate"
                            :value="@Old('startDate', $class->CLASS_START)">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Save Class</button>
            </form>
        </div> --}}
    </x-slot>
    
    </x-app-layout>