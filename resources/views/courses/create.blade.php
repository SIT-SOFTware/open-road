<x-app-layout>
    
    <x-slot name="content">
        <div>
            <!-- Form stores the course in the DB -->
            <form action="{{ route('admin.courses.store') }}" class="border rounded p-3 bg-grey text-black" method="post">
                @csrf
                    <a href="" style="font-size: 2.0rem;">Course ID</a>
                    <div class="row">
                        <!-- Course ID Input -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course ID:</u></div>
                            <input type="number" name="courseID" placeholder="Course ID">
                        </div>
                        <!-- Course Name Input -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Name:</u></div>
                            <input type="text" name="courseName" placeholder="Course Name">
                        </div>
                        <!-- Course Docs Input (WIP) -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Documents:</u></div>
                            <div>Docs</div>
                        </div>
                        <!-- Course Max Seats Input -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Course Max Seats:</u></div>
                            <input type="number" name="courseMax" placeholder="Seats">
                        </div>
                        <!-- Course Fee Input -->
                        <div class="col">                            
                            <div class="font-weight-bold"><u>Course Fee:</u></div>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" name="courseFee" placeholder="Course Fee">
                                </div>                        
                        </div>
                    </div>
                </div>
                <!-- Saves Course -->
                <x-button class="rounded bg-black">Create Course</x-button>
            </form>
        </div>
    </x-slot>
    
    </x-app-layout>