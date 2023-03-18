<x-app-layout>
    
    <x-slot name="content">
        
        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>
        @if(request()->routeIs('admin.vehicles.index'))
            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Available Vehicles</h2>
            <hr class="border border-dark" />

            <!-- Add Vehicle Button and conditional render-->
            <a href="{{ route('admin.vehicles.create') }}" class="btn btn-success p-2 me-2 mb-2 fs-5">Add vehicle</a>

            <!-- Go to trashed vehicles -->
            <a href="{{ route('admin.trashed.vehicles.index') }}" class="btn btn-danger p-2 mb-2 fs-5">Inactive</a>

        <!-- Checks to see if the user is looking at trashed vehicles -->
        @else
            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Inactive Vehicles</h2>
            <hr class="border border-dark" />

            <!-- Add back button to return from trashed page -->
            <a href="{{ route('admin.vehicles.index') }}" class="btn btn-dark p-2 mb-2 fs-5">Back to vehicles</a>
        @endif
        
        <!--Motorcycle Section -->
        <a href="#motorcycles" class="text-decoration-none text-dark text-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
            <h2>Motorcycles<i class="bi bi-chevron-down custom-chevron"></i></h2>
        </a> 
        
        <div class="row justify-content-center collapse show" id="motorcycles">

            @forelse($bikes as $bike)
                <div class="col-12">
                    <div class="card mb-3 shadow-lg bg-dark text-white">
                        <div class="card-body text-center fs-4">
                                @csrf

                                <a href="#bikeCollapse{{$loop->iteration}}" data-bs-toggle="collapse" class="text-decoration-none text-customWhite" role="button">
                                    <div class="row justify-content-center mt-3">
                                        <div class="col-10">
                                        
                                            <div class="row justify-content-center">
    
                                                <!-- Make -->
                                                <div class="col-4 ">
                                                    <h2 class="card-heading text-center ">Make: {{ $bike->VEHICLE_MAKE }}</h2>
                                                </div>
    
                                                <!-- Model -->
                                                <div class="col-4 ">
                                                    <h2 class="card-heading text-center">Model: {{ $bike->VEHICLE_MODEL }}</h2>
                                                </div>
                                                
                                                <!-- Year -->
                                                <div class="col-4 ">
                                                    <h2 class="card-heading text-center">Year: {{ $bike->VEHICLE_YEAR }}</h2>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @if(!request()->routeIs('admin.trashed.vehicles.*'))
                                <a href="{{ route('admin.vehicles.edit', ['vehicle' => $bike]) }}" class="text-customWhite text-decoration-none" onclick="return confirm('{{ $bike }}')">
                                @endif
                                    <div class="collapse mt-3" id="bikeCollapse{{$loop->iteration}}">
                                        
                                        <div class="row justify-content-center mb-3">
    
                                            <!-- Stock # -->
                                            <div class="col-md-3 col-12">
                                                <span class=""> Stock #: </span>{{ $bike->VEHICLE_STOCK_NUM }}
                                            </div>
    
                                            <!-- VIN -->
                                            <div class="col-md-3 col-12">
                                                <span class=""> VIN: </span>{{ $bike->VEHICLE_VIN }}
                                            </div>
    
                                            <!-- Odometer -->
                                            <div class="col-md-2 col-12">
                                                <span class=""> Odometer: </span>{{ $bike->VEHICLE_ODO}}
                                            </div>
    
                                            <!-- Vehicle Colour -->
                                            <div class="col-md-2 col-12 ">
                                                <span class=""> Colour: </span>{{ $bike->VEHICLE_COLOR }}
                                            </div>
    
                                            <!-- Vehicle Size -->
                                            <div class="col-md-2 col-12">
                                                <span class=""> Size: </span>{{ $bike->VEHICLE_SIZE }}
                                            </div>
    
                                        </div>
                                        
                                        <!-- Notes -->
                                        <div class="row justify-content-center mb-4 ">
                                            <div class="col-11">
                                                <div class="form-floating text-black">
                                                    <textarea class="form-control" disabled placeholder="Leave a comment here" id="notes" style="height: 100px" name="notes" field="notes">{{  @Old('notes', $bike->NOTES) }}</textarea>
                                                    <label for="notes" class="">Notes</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <!-- Conditionally renders deleted tag, restore, and perma-delete buttons if user is viewing trashed vehicles -->
                                        @if(request()->routeIs('admin.trashed.vehicles.*'))
                                                    
                                            <div class="row justify-content-lg-end justify-content-center mt-4">
                                                
                                                <!-- Deleted tag -->
                                                <div class="text-red col-lg-10 text-lg-start text-center">
                                                    Deleted: {{ $bike->deleted_at->diffForHumans() }}
                                                </div>
                                                
                                                <!-- Restore and Delete buttons -->
                                                <div class="col-auto">
                                                    <form action="{{ route('admin.trashed.vehicles.update', $bike) }}" method="post" class="">
                                                        @method('put')
                                                        @csrf
                                                        <button class="btn btn-success text-white"><i class="bi bi-recycle"></i></button>
                                                    </form>
                                                </div>
                                                
                                                <div class="col-auto">
                                                    <form action="{{ route('admin.trashed.vehicles.destroy', $bike) }}" method="post" class="">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger text-white"><i class="bi bi-trash3"></i></button>
                                                    </form>
                                                </div>
                                            </div>

                                        @endif
                                @if(!request()->routeIs('admin.trashed.vehicles.*'))
                                </a>
                                @endif
                        </div>
                    </div>
                </div>
                
            <!-- If theres no Data Display This -->
            @empty
                <p>No Vehicle Data</p> 
            @endforelse
        </div>
        <hr class="border border-dark mt-3 mb-4" />
        
        <!--ATV Section -->
        <a href="#atvs" class="text-decoration-none text-dark text-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
            <h2>All Terrain Vehicles<i class="bi bi-chevron-down custom-chevron"></i></h2>
        </a> 
        
        <div class="row justify-content-center collapse show" id="atvs">
            @forelse($atvs as $atv)
            <div class="col-12">
                <div class="card mb-3 shadow-lg bg-dark text-white">
                    <div class="card-body text-center fs-4">
                            @csrf

                            <a href="#atvCollapse{{$loop->iteration}}" data-bs-toggle="collapse" class="text-decoration-none text-customWhite" role="button">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-10">
                                    
                                        <div class="row justify-content-center">

                                            <!-- Make -->
                                            <div class="col-4 ">
                                                <h2 class="card-heading text-center ">Make: {{ $atv->VEHICLE_MAKE }}</h2>
                                            </div>

                                            <!-- Model -->
                                            <div class="col-4 ">
                                                <h2 class="card-heading text-center">Model: {{ $atv->VEHICLE_MODEL }}</h2>
                                            </div>
                                            
                                            <!-- Year -->
                                            <div class="col-4 ">
                                                <h2 class="card-heading text-center">Year: {{ $atv->VEHICLE_YEAR }}</h2>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </a>

                            @if(!request()->routeIs('admin.trashed.vehicles.*'))
                            <a href="{{ route('admin.vehicles.edit', ['vehicle' => $atv]) }}" class="text-customWhite text-decoration-none" onclick="return confirm('{{ $atv }}')">
                            @endif
                                <div class="collapse mt-3" id="atvCollapse{{$loop->iteration}}">
                                    
                                    <div class="row justify-content-center mb-3">

                                        <!-- Stock # -->
                                        <div class="col-md-3 col-12">
                                            <span class=""> Stock #: </span>{{ $atv->VEHICLE_STOCK_NUM }}
                                        </div>

                                        <!-- VIN -->
                                        <div class="col-md-3 col-12">
                                            <span class=""> VIN: </span>{{ $atv->VEHICLE_VIN }}
                                        </div>

                                        <!-- Odometer -->
                                        <div class="col-md-2 col-12">
                                            <span class=""> Odometer: </span>{{ $atv->VEHICLE_ODO}}
                                        </div>

                                        <!-- Vehicle Colour -->
                                        <div class="col-md-2 col-12 ">
                                            <span class=""> Colour: </span>{{ $atv->VEHICLE_COLOR }}
                                        </div>

                                        <!-- Vehicle Size -->
                                        <div class="col-md-2 col-12">
                                            <span class=""> Size: </span>{{ $atv->VEHICLE_SIZE }}
                                        </div>

                                    </div>
                                    
                                    <!-- Notes -->
                                    <div class="row justify-content-center mb-4 ">
                                        <div class="col-11">
                                            <div class="form-floating text-black">
                                                <textarea class="form-control" disabled placeholder="Leave a comment here" id="notes" style="height: 100px" name="notes" field="notes">{{  @Old('notes', $atv->NOTES) }}</textarea>
                                                <label for="notes" class="pb-4">Notes</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Conditionally renders deleted tag, restore, and perma-delete buttons if user is viewing trashed vehicles -->
                                @if(request()->routeIs('admin.trashed.vehicles.*'))           
                                    <div class="row justify-content-lg-end justify-content-center mt-4">
                                        
                                        <!-- Deleted tag -->
                                        <div class="text-red col-lg-10 text-lg-start text-center">
                                            Deleted: {{ $atv->deleted_at->diffForHumans() }}
                                        </div>
                                        
                                        <!-- Restore and Delete buttons -->
                                        <div class="col-auto">
                                            <form action="{{ route('admin.trashed.vehicles.update', $atv) }}" method="post" class="">
                                                @method('put')
                                                @csrf
                                                <button class="btn btn-success text-white"><i class="bi bi-recycle"></i></button>
                                            </form>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <form action="{{ route('admin.trashed.vehicles.destroy', $atv) }}" method="post" class="">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger text-white"><i class="bi bi-trash3"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @if(!request()->routeIs('admin.trashed.vehicles.*'))
                            </a>
                            @endif

                    </div>
                </div>
            </div>
            
        <!-- If theres no Data Display This -->
        @empty
            <p>No Vehicle Data</p> 
        @endforelse
    </div>
    <hr class="border border-dark mt-3 mb-4" />






        <!-- *TODO* This is the original code, which I've kept as a reference because
                    it appears there was a bug here that existed before I got here.
                    The $vehicle variable is not being passed correctly. : Josh -->
        {{-- <x-alert-success>
            {{ session('success') }}
        </x-alert-success>  
    
        <div>
        @if(request()->routeIs('admin.vehicles.index'))
            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Available Vehicles</h2>
            <hr class="border border-dark" />

            <!-- Add Vehicle Button and conditional render-->
            <a href="{{ route('admin.vehicles.create') }}" class="btn btn-success p-2 me-2 mt-4 mb-2 fs-5">Add vehicle</a>

            <!-- Go to trashed vehicles -->
            <a href="{{ route('admin.trashed.vehicles.index') }}" class="btn btn-danger p-2 mt-4 mb-2 fs-5">Trashed</a>

        <!-- Checks to see if the user is looking at trashed vehicles -->
        @else
            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Trashed Vehicles</h2>
            <hr class="border border-dark" />

            <!-- Add back button to return from trashed page -->
            <a href="{{ route('admin.vehicles.index') }}" class="btn btn-dark p-2 mt-4 mb-2 fs-5">Back to vehicles</a>
        @endif
            <!-- Display Sudents associated with the User Login -->
            @forelse ( $vehicles as $vehicle )
                <div class="border rounded p-3 bg-white text-black my-4">
                    <div class="row">
                        <div class="col">
                            <p style="font-size: 2.0rem;">{{ $vehicle->VEHICLE_STOCK_NUM }} {{ $vehicle->VEHICLE_VIN }}</p>  
                        </div>
                        <div class="col">
                            <a href="{{ route('admin.vehicles.show', $vehicle) }}" class="btn btn-danger col"><strong>Show More</strong></a><br/>
                        </div>

                        <!-- Conditionally renders deleted tag, restore, and perma-delete buttons if user is viewing trashed vehicles -->
                        @if(request()->routeIs('admin.trashed.vehicles.*'))
                                    
                            <div class="row justify-content-lg-end justify-content-center mt-4">
                                
                                <!-- Deleted tag -->
                                <div class="text-red col-lg-10 text-lg-start text-center">
                                    Deleted: {{ $vehicle->deleted_at->diffForHumans() }}
                                </div>
                                
                                <!-- Restore and Delete buttons -->
                                <div class="col-auto">
                                    <form action="{{ route('admin.trashed.vehicles.update', $vehicle) }}" method="post" class="">
                                        @method('put')
                                        @csrf
                                        <button class="btn btn-success text-white"><i class="bi bi-recycle"></i></button>
                                    </form>
                                </div>
                                
                                <div class="col-auto">
                                    <form action="{{ route('admin.trashed.vehicles.destroy', $vehicle) }}" method="post" class="">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger text-white"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </div>
                            </div>

                        @endif

                        </div>
                    </div>
            <!-- If theres no Data Display This -->
            @empty
                <p>No Vehicle Data</p>     
            @endforelse 
        </div> --}}

    </x-slot>
    
    </x-app-layout>