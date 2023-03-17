<x-app-layout>

    <x-slot name="content">
           
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-11">
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-dark mb-2 px-2 me-3 mt-4 fs-5">View Courses</a>         
                    <div class="card shadow-lg bg-dark text-white">
                        <div class="card-body">
        
                            <!-- Form stores course DB record -->
                            <form action="{{ route('admin.courses.store') }}" class="" method="POST">
                                @csrf
                                
                                <!-- Title -->
                                <h1 class="card-title text-center mb-4 mt-3">New Course</h1>
        
                                <div class="row justify-content-center my-4">
                                    
                                    
                                    <!-- Course ID Input -->
                                    <div class="col-md-5 mb-4 mb-md-5 col-9">
                                        <div class="input-group">
                                            <label class="input-group-text" for="courseID">Course ID</label>
                                            <input required class="form-control" type="number" name="courseID" placeholder="ID Number">
                                        </div>
                                    </div>
        
                                    <!-- Course Name Input -->
                                    <div class="col-md-5 mb-4 col-9 offset-md-1">
                                        <div class="input-group">
                                            <label class="input-group-text" for="courseName">Course Name</label>
                                            <input required class="form-control" type="text" name="courseName" placeholder="Course Name">
                                        </div>
                                    </div>
        
                                    <!-- Course Max Seats Input -->
                                    <div class="col-md-5 mb-4 mb-md-5 col-9">
                                        <div class="input-group">
                                            <label class="input-group-text" for="courseMax">Course Max Seats</label>
                                            <input required type="number" class="form-control" name="courseMax" placeholder="Seats">
                                        </div>
                                    </div>
                                    
                                    <!-- Course Fee Input -->
                                    <div class="col-md-5 mb-4 col-9 offset-md-1">
                                        <div class="input-group">
                                            <label class="input-group-text" for="courseFee">$</label>
                                            <input required type="number" class="form-control" name="courseFee" placeholder="Course Fee" min="0.00" max="10000.00" step="0.01">
                                        </div>
                                    </div>

                                    <!-- Course Docs Input (WIP) -->
                                    <div class="col-md-5 text-md-start text-center mb-4 col-9">
                                        <label class="text-decoration-underline fs-5" for="courseDocs">Course Documents</label>
                                        <input id="courseDocsInput" type="file" class="form-control">
                                    </div>
                                    
                                    <!-- Spaces Odd Card Left -->
                                    <div class="col-md-6"></div>
        
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="row justify-content-center pe-2">
                                    <div class="col text-md-end text-center mb-3">
                                        <button type="submit" class="btn fs-5 btn-success mb-2 me-md-4">Create Course</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            function addFileInputListeners(element) {

            // Add an event listener to the file input element
            element.addEventListener('change', () => {
                // Create a new file input element
                const newFileInput = document.createElement('input');
                newFileInput.type = 'file';
                newFileInput.classList.add('form-control', 'mt-4');
                newFileInput.required = true;

                // Get the parent element and append the new file input element to it
                const parentElement = element.parentNode;
                parentElement.appendChild(newFileInput);

                // Recursively add event listeners to the new file input elements
                addFileInputListeners(newFileInput);
            });
    }

            // Get the file input element and add an event listener to it
            const fileInput = document.getElementById('courseDocsInput');
            addFileInputListeners(fileInput);
        </script>

    </x-slot>
    
    </x-app-layout>