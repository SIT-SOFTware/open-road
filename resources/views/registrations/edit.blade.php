<x-app-layout>

    <x-slot name="content">
        <h1 class="text-dark text-center mt-3">Edit Registration</h1>
        <hr class="border border-dark" />

            <div class="border rounded fs-3 p-3 bg-dark text-white text-center">

                <div class="row justify-content-center">
                    <!-- Start Date  -->
                    <div class="col-md-4 col-6 font-weight-bold">
                        Start Date: {{ $class_info[$registration->REG_ID]['class_date'] }}
                    </div>

                    <!-- Seats Available -->
                    <div class="col-md-4 col-6 font-weight-bold">
                       Seats Available: {{ $course->COURSE_MAX_SEATS }}
                    </div>

                    <!-- Stuff And Register Button -->
                    <div class="col-md-4 col-12 font-weight-bold">
                        <form action="{{ route('registrations.update', $registration) }}" method="post">
                            @method('put')
                            @csrf

                            <div class="input-group">
                                <label class="input-group-text" for="stuff_id">Student</label>
                                <select class="form-control" name="stuff_id" id="stuff_id">
                                    <!-- Make the previously selected option the default so the user doesn't accidentally register someone else -->
                                    <option selected value="{{ $registration->STUFF_ID }}"></option>
                                    @forelse($stuffs as $stuff )

                                        @if(!($stuff->STUFF_ID == @Old('stuff_id', $registration->STUFF_ID)))
                                            <!-- Only render if the option does NOT match the selected default option -->
                                            <option value="{{ $stuff->STUFF_ID }}">{{ $stuff->STUFF_PNAME }}</option>
                                        @endif

                                    @endforeach
                                </select>
                                <button class="btn btn-success fs-5">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </x-slot>

</x-app-layout>