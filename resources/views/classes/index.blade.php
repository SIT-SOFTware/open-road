<x-app-layout>
 
<!-- This page is not done :) -->

<x-slot name="content">
    <div>
        <a href="{{ route('admin.classes.create') }}" class="">Add Class</a>
        @foreach ( $classes as $class )
            <div class="border rounded p-3 bg-black text-white">
                <a href="{{ route('admin.classes.show', $class) }}" style="font-size: 2.0rem;">{{ $class->COURSE_ID }}-{{ $class->CLASS_ID }}</a>
                <div class="row">

                    <!-- Class Code -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Class Code:</u></div>
                        <div>{{ $class->CLASS_ID }}</div>
                    </div>

                    <!-- Course ID -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Course ID:</u></div>
                        <div>{{ $class->COURSE_ID }}</div>
                    </div>

                    <!-- TODO: Display name instead of instructor ID -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Instructor: </u></div>
                        <div>{{ $class->PRIMARY_INST }}</div>
                    </div>

                    <!-- Start Date -->
                    <div class="col">
                        <div class="font-weight-bold"><u>Start Date:</u></div>
                        <div>{{ Str::limit($class->CLASS_START, 10, '') }}</div>
                    </div>

                    <!-- End Date -->
                    <div class="col">
                        <div class="font-weight-bold"><u>End Date:</u></div>
                        <div>{{ Str::limit($class->CLASS_END, 10, '') }}</div>
                    </div>
                </div>
            </div>          
        @endforeach
    </div>
</x-slot>

</x-app-layout>