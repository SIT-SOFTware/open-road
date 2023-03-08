<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            <form action="{{ route('admin.courses.store') }}" class="border rounded p-3 bg-grey text-black" method="post">
                @csrf
                    <a href="" style="font-size: 2.0rem;">Course ID</a>
                    <div class="row">
                        <div class="col">
                            <div class="font-weight-bold"><u>Course ID:</u></div>
                            <input type="number" name="courseID" placeholder="Course ID">
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Name:</u></div>
                            <input type="text" name="courseName" placeholder="Course Name">
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Documents:</u></div>
                            <div>Docs</div>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Max Seats:</u></div>
                            <input type="number" name="courseMax" placeholder="Seats">
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Fee:</u></div>
                            <input type="number" name="courseFee" placeholder="Course Fee">
                        </div>
                    </div>
                </div>
                <x-button class="rounded bg-black">Create Course</x-button>
            </form>
        </div>
    </x-slot>
    
    </x-app-layout>