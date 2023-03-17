<x-app-layout>
    
    <x-slot name="content">

        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>  
        <h1 class="text-dark text-center mt-3">Register</h1>
        <hr class="border border-dark" />
        <div class="container">
            <form method="post" action="{{ route('registrations.create') }}">
                <div class="row">
                    <h1 class="mt-3 text-decoration-underline">New Class</h1>
                    <div class="col-md-4 col-6">
                        @csrf
                        @method('GET')

                        <div class="input-group">
                            <label class="input-group-text" for="course_id">Select a Course:</label>
                            <select class="form-control" name="course_id" id="course_id">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->COURSE_ID }}">{{ $course->COURSE_NAME }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <button class="btn btn-primary px-2 me-3 fs-5">View Available Classes</button>
                    </div>
                </div>
            </form>
            
            <h1 class="mt-3 text-decoration-underline">Your Classes</h1>
            @forelse ( $registrations as $registration )
                <div class="card bg-dark">
                    <div class="card-body text-white fs-2 ">
                        <div class="row justify-content-between p-2">
                            <div class="col-md-4 text-md-start text-center">
                                Course: {{ $reg_info[$registration->REG_ID]['course_name'] }}
                            </div>
                            <div class="col-md-4 text-center">
                                Start Date: {{ $reg_info[$registration->REG_ID]['class_date'] }}
                            </div>
                            <div class="col-md-4 text-md-end text-center">
                                Price: ${{ $reg_info[$registration->REG_ID]['course_fee'] }}
                            </div>

                            <div class="col-12 mt-2 text-decoration-underline text-md-start text-center">
                                Registered Students:
                            </div>

                            <div class="col-12 fs-4 text-md-start text-center">
                                @forelse ($stuffs as $stuff)
                                    @if ($stuff->STUFF_ID == $registration->STUFF_ID)
                                        ({{ $stuff->STUFF_PNAME }}) {{ $stuff->STUFF_FNAME }} {{ $stuff->STUFF_LNAME }} &nbsp;&nbsp;
                                    @endif
                                @empty
                                    ERROR
                                @endforelse  
                            </div>

                            <div class="col-12 mt-md-0 mt-3 text-center text-md-end">
                                <form action="{{ route('registrations.destroy', $registration) }}" method="post">
                                    @method('delete')
                                    @csrf

                                    <button type="submit" class="btn btn-danger px-3 fs-5" onclick="return confirm('Are you sure you wish to Cancel This Registration?')">Cancel</button>
                                    <a href="{{ route('registrations.edit', $registration) }}" class="btn btn-primary px-3 fs-5">Edit</a>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @empty
                <p>No Registrations Data</p>     
            @endforelse
        </div>
    
    </x-slot>
    
    </x-app-layout>