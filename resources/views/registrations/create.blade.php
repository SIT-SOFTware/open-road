<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-carousel name="slide"/>
    
    <x-slot name="content">
        <h1 class="text-dark text-center mt-3">Available {{ $course->COURSE_NAME }} Classes</h2>
            <hr class="border border-dark" />
        @forelse ($classes as $class_id => $start_date)
            <div class="border rounded fs-3 p-3 bg-dark text-white text-center">
                
                <div class="row">
                    {{-- Start Date --}}
                    <div class="col font-weight-bold">
                        Start Date: {{ $start_date }}
                    </div>
                    {{-- Seats Available --}}
                    <div class="col font-weight-bold">
                        Seats Available: {{ $course->COURSE_MAX_SEATS - $seats[$class_id] }}
                    </div>
                    {{-- Stuff And Register Button --}}
                    <div class="col font-weight-bold"> 
                        <form action="{{ route('registrations.store') }}" method="post">
                            @csrf

                            <div class="input-group">
                                <label for="stuff_id" class="input-group-text  fs-5">Student</label>
                                <select name="stuff_id" class="form-control  fs-5" id="stuff_id">
                                    @foreach ($stuff_options as $stuff_id => $pName )
                                        <option value="{{ $stuff_id }}">{{ $pName}}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-success fs-5">Register</button>
                            </div>
                            <input type="hidden" name="class_id" value="{{ $class_id }}">
                        </form>
                    </div>
                </div>
            </div>
        @empty
            No Poop: <a href="{{ route('registrations.create') }}" class="button">Make Registration</a>
        @endforelse
    </x-slot>
    
    </x-app-layout>