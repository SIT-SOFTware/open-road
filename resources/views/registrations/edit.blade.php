<x-app-layout>

    <x-slot name="name">
        Nathaniel
    </x-slot>

    <x-slot name="content">
        <h1 class="text-dark text-center mt-3">Edit Registration</h2>
            <div class="border rounded p-3 bg-white text-black text-center">

                <div class="row">
                    <!-- Start Date  -->
                    <div class="col font-weight-bold">
                        <u>Start Date:</u> {{ $class_info[$registration->REG_ID]['class_date'] }}
                    </div>

                    <!-- Seats Available -->
                    <div class="col font-weight-bold">
                        <u>Seats Available:</u> {{ $course->COURSE_MAX_SEATS }}
                    </div>

                    <!-- Stuff And Register Button -->
                    <div class="col font-weight-bold">
                        <form action="{{ route('registrations.update', $registration) }}" method="post">
                            @method('put')
                            @csrf

                            <select name="stuff_id" id="stuff_id">
                                <!-- Make the previously selected option the default so the user doesn't accidentally register someone else -->
                                <option selected value="{{ $registration->STUFF_ID }}">{{ $stuffNameID[$registration->STUFF_ID] }}</option>
                                @forelse($stuffs as $stuff )

                                @if(!($stuff->STUFF_ID == @Old('stuff_id', $registration->STUFF_ID)))
                                <!-- Only render if the option does NOT match the selected default option -->
                                <option value="{{ $stuff->STUFF_ID }}">{{ $stuff->STUFF_PNAME }}</option>
                                @endif

                                @endforeach
                            </select>
                            <button>Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
    </x-slot>

</x-app-layout>