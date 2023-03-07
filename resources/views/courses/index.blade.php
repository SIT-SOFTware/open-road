<x-app-layout>

<x-slot name="name">
    Bryan
</x-slot>

<x-slot name="content">
    <div>
        <a href="{{ route('admin.courses.create') }}" class="btn btn-black">Add Course</a>
        @foreach ( $courses as $course )
            <div class="border rounded p-3 bg-black text-white">
                <a href="{{ route('admin.courses.show', $course->COURSE_ID) }}" style="font-size: 2.0rem;">{{ $course->COURSE_NAME }}</a>
                <div class="row">
                    <div class="col">
                        <div class="font-weight-bold"><u>Course ID:</u></div>
                        <div>{{ $course->COURSE_ID }}</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bold"><u>Course Documents:</u></div>
                        <div>{{ $course->COURSE_DOCS }}</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bold"><u>Course Max Seats:</u></div>
                        <div>{{ $course->COURSE_MAX_SEATS }}</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bold"><u>Course Fee:</u></div>
                        <div>{{ $course->COURSE_FEE }}</div>
                    </div>
                </div>
            </div>          
        @endforeach
    </div>
</x-slot>

</x-app-layout>