<x-app-layout>
 
    <x-slot name="content">
        <div class="container text-center fs-2  my-4">
            <a href="#classMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h1>Class Management<i class="bi bi-chevron-down custom-chevron"></i></h1>
            </a> 
            
            <div class="row justify-content-center collapse show" id="classMgmt">
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.classes.create') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Create <br> Class <br> <i class="bi bi-file-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.classes.massEdit') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Edit <br> Classes <br> <i class="bi bi-file-arrow-up"></i>
                            </div>
                        </a>
                    </div>
                </div> 
                
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.classes.index') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                View <br> Classes <br> <i class="bi bi-file-text"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border border-dark my-4" />

            <a href="#courseMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h1>Course Management<i class="bi bi-chevron-down custom-chevron"></i></h1>
            </a>
            
            <div class="row justify-content-center collapse show" id="courseMgmt">
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.courses.create') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Create <br> Course<br> <i class="bi bi-journal-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.courses.massEdit') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Edit <br> Courses <br> <i class="bi bi-journal-arrow-up"></i>
                            </div>
                        </a>
                    </div>
                </div> 
                
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.courses.index') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                View <br> Courses <br> <i class="bi bi-journal-text"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border border-dark  my-3" />

            <a href="#vehicleMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Vehicle Management">
                <h1>Vehicle Management<i class="bi bi-chevron-down custom-chevron"></i></h1>
            </a>
            
            <div class="row justify-content-center collapse show" id="vehicleMgmt">
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.vehicles.create') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Create <br> Vehicle <br> <i class="bi bi-clipboard2-plus"></i></i>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.vehicles.massEdit') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Edit <br> Vehicles <br> <i class="bi bi-clipboard2-minus"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.vehicles.index') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                View <br> Vehicles <br> <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border border-dark my-3" />

            <a href="#reportMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h1>Analytics & Advertising<i class="bi bi-chevron-down custom-chevron"></i></h1>
            </a>
            
            <div class="row justify-content-center collapse show" id="reportMgmt">
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="" class="text-decoration-none text-white">
                            <a href="{{ route('advertisements.index') }}" class="text-decoration-none text-customWhite"> 
                                <div class="card-body p-5">
                                    Manage<br> Adverts <br> <i class="bi bi-badge-ad"></i>
                                </div>
                            </a>
                        </a>
                    </div>
                </div> 
                
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Course <br> Reports <br> <i class="bi bi-file-ruled"></i>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Next Class: <br> 2023-04-15 <br> <i class="bi bi-calendar"></i>
                            </div>
                        </a>
                    </div>
                </div> 
            </div>
            <hr class="border border-dark  my-3" />

            <a href="#userMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h1>User Management<i class="bi bi-chevron-down custom-chevron"></i></h1>
            </a>
            
            <div class="row justify-content-center collapse show" id="userMgmt">
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('info.create') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Create <br> Student/Staff <br> <i class="bi bi-person-add"></i>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('info.index') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Edit <br> Student/Staff <br> <i class="bi bi-person-up"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('users.index') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Manage <br> User Accounts <br> <i class="bi bi-person-gear"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border border-dark my-3" />

            <a href="#userMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h1>Mailing<i class="bi bi-chevron-down custom-chevron"></i></h1>
            </a>
            
            <div class="row justify-content-center collapse show" id="userMgmt">
                
                <div class="col-lg-3 col-8 mb-md-3 mt-3">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('admin.mail') }}" class="text-decoration-none text-customWhite">
                            <div class="card-body p-5">
                                Send <br> Message <br> <i class="bi bi-envelope-plus"></i></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </x-slot>

</x-app-layout>