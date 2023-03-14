<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>  
    
        <div>

        <h1 class="text-dark text-center mt-3">Register</h2>
        <hr class="border border-dark" />
            {{-- Create New Registration For Class Selected in Drop Down Menu --}}
            <form method="post" action="{{ route('registrations.create') }}">
                @csrf
                @method('GET')
                <label for="course_id">Select a Course:</label>
                <select name="course_id" id="course_id">
                    @foreach ($courses as $course)
                        <option value="{{ $course->COURSE_ID }}">{{ $course->COURSE_NAME }}</option>
                    @endforeach
                </select>
                <br>
                <button type="submit">View Available Classes</button>
            </form>

            {{-- Display Sudents associated with the User Login --}}
            @forelse ( $registrations as $registration )
                <div class="border rounded p-3 bg-white text-black my-4">
                    <div class="row">
                        <div class="col">
                            @forelse ($stuffs as $stuff)
                                @if ($stuff->STUFF_ID == $registration->STUFF_ID)
                                    <p style="font-size: 2.0rem;">Name: ({{ $stuff->STUFF_PNAME }}) {{ $stuff->STUFF_FNAME }} {{ $stuff->STUFF_LNAME }}<br/>Stuff ID: {{ $registration->STUFF_ID }}</p> 
                                @endif
                            @empty
                                ERROR
                            @endforelse 
                        </div>
                        <div class="col">
                            <form action="{{ route('registrations.destroy', $registration) }}" method="post" class="col">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you wish to Cancel This Registration?')">Cancel Registration</button>
                            </form>
                        </div>
                    </div>
                </div>
            {{-- If theres no Data Display This --}}
            @empty
                <p>No Registrations Data</p>     
            @endforelse
        </div>
    </x-slot>
    
    </x-app-layout>