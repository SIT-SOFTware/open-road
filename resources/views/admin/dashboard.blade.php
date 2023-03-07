<x-app-layout>

    <x-slot name="content">
        <div class="container text-center fs-2  my-4">
            <a href="#classMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h2>Class Management<i class="bi bi-chevron-down custom-chevron"></i></h2>
            </a>
            
            <div class="row justify-content-center collapse show" id="classMgmt">
                <div class="col-md-3 col-8 my-5 ">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Create <br> Class <br> <i class="bi bi-file-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Edit <br> Class <br> <i class="bi bi-file-arrow-up"></i>
                            </div>
                        </a>
                    </div>
                </div> 
                
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5"> 
                                View <br> Classes <br> <i class="bi bi-file-text"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border border-dark  my-3" />

            <a href="#courseMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h2>Course Management<i class="bi bi-chevron-down custom-chevron"></i></h2>
            </a>
            
            <div class="row justify-content-center  collapse" id="courseMgmt">
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Create <br> Course<br> <i class="bi bi-file-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Edit <br> Course <br> <i class="bi bi-file-arrow-up"></i>
                            </div>
                        </a>
                    </div>
                </div> 
                
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                View <br> Courses <br> <i class="bi bi-file-text"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border border-dark  my-3" />

            <a href="#reportMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h2>Analytics & Advertising<i class="bi bi-chevron-down custom-chevron"></i></h2>
            </a>
            
            <div class="row justify-content-center collapse" id="reportMgmt">
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="{{ route('advertisements.index') }}" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Banner <br> Adverts <br> <i class="bi bi-badge-ad"></i>
                            </div>
                        </a>
                    </div>
                </div> 
                
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Course <br> Reports <br> <i class="bi bi-file-ruled"></i>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Next Class: <br> 2023-04-15 <br> <i class="bi bi-calendar"></i>
                            </div>
                        </a>
                    </div>
                </div> 
            </div>
            <hr class="border border-dark  my-3" />

            <a href="#userMgmt" class="text-decoration-none text-dark" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
                <h2>User Management<i class="bi bi-chevron-down custom-chevron"></i></h2>
            </a>
            
            <div class="row justify-content-center collapse" id="userMgmt">
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Create <br> User <br> <i class="bi bi-person-add"></i>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-3 col-8 my-5">
                    <div class="card bg-dark shadow-md" style="min-width: 200px;">
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card-body p-5">
                                Edit <br> User <br> <i class="bi bi-person-gear"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border border-dark my-3" />

        </div>
    </x-slot>

</x-app-layout>
