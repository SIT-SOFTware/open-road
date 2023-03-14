<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-carousel name="slide"/>
    
    <x-slot name="content">
        <h1 class="text-dark text-center mt-3">Available {{ $course->COURSE_NAME }} Classes</h2>
        @forelse ($classes as $class_id => $start_date)
            <div class="border rounded p-3 bg-white text-black text-center">
                
                <div class="row">
                    {{-- Start Date --}}
                    <div class="col font-weight-bold">
                        <u>Start Date:</u> {{ $start_date }}
                    </div>
                    {{-- Seats Available --}}
                    <div class="col font-weight-bold">
                        <u>Seats Available:</u> {{ $course->COURSE_MAX_SEATS - $seats[$class_id] }}
                    </div>
                    {{-- Stuff And Register Button --}}
                    <div class="col font-weight-bold"> 
                        <form action="{{ route('registrations.store') }}" method="post">
                            @csrf

                            <input type="hidden" name="class_id" value="{{ $class_id }}">
                            <select name="stuff_id" id="stuff_id">
                                @foreach ($stuff_options as $stuff_id => $pName )
                                    <option value="{{ $stuff_id }}">{{ $pName}}</option>
                                @endforeach
                            </select>
                            <button>Register</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            No Poop
        @endforelse
    </x-slot>
    
    </x-app-layout>