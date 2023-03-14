<x-app-layout>
    
    <x-slot name="content">
        
        <div class="row">
            <div class="col-3">
                <a href="{{ route('admin.classes.create') }}" class="btn btn-success p-2 mt-4 fs-5">Add Class</a>
            </div>
            <div class="col-6">
                <h1 class="text-dark text-center mt-3">Editing Vehicles</h2>

            </div>
        </div>
        
        <hr class="border border-dark" />

        <!--Motorcycle Section -->
        <a href="#motorcycles" class="text-decoration-none text-dark text-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
            <h2>Motorcycles<i class="bi bi-chevron-down custom-chevron"></i></h2>
        </a> 
        
        <div class="row justify-content-center collapse show" id="motorcycles">
            @foreach($bikes as $bike)
                <div class="col-l2">
                    <div class="card mb-3 shadow-lg bg-dark text-white">
                        <div class="card-body">
                            {{-- For for creating a new user uses info.store route that save a new stuff instance --}}
                            <form action="{{ route('admin.vehicles.store') }}" method="post">
                                @csrf

                                <a href="#bikeCollapse{{$loop->iteration}}" data-bs-toggle="collapse" class="text-customWhite" role="button">
                                    <!-- Title -->
                                    <h1 class="card-title text-center mb-5 mt-4">Edit Vehicle</h1>
                                </a>
                                
                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <div class="row justify-content-between">
                                            
                                            <!-- Year -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="font-weight-bold input-group-text">Year</label>
                                                    <input required type="text" name="year" class="form-control" autocomplete="off" value="{{ $bike->VEHICLE_YEAR }}">
                                                </div>
                                            </div>

                                            <!-- Make -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="input-group-text">Make</label>
                                                    <input required type="text" name="make"  placeholder="Vehicle Make" class="form-control" autocomplete="off" value="{{ $bike->VEHICLE_MAKE}}"/>
                                                </div>
                                            </div>

                                            <!-- Model -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="input-group-text">Model</label>
                                                    <input required type="text" name="model" placeholder="Vehicle Model" class="form-control"autocomplete="off" value="{{ $bike->VEHICLE_MODEL }}"/>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="bikeCollapse{{$loop->iteration}}">
                                    

                                    <div class="row justify-content-center">

                                        <!-- Stock # -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text" for="stockNo">Stock Number</label>
                                                <input required type="text" class="form-control" name="stockNo" placeholder="Enter Stock No." maxlength="17" autocomplete="off" value="{{ $bike->VEHICLE_STOCK_NUM }}"/>
                                            </div>
                                        </div>

                                        <!-- VIN -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">VIN</label>
                                                <input required class="form-control" type="text" name="vin"  placeholder="Enter VIN" maxlength="17" autocomplete="off" value="{{ $bike->VEHICLE_VIN }}"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row justify-content-center">

                                        <!-- Vehicle Type -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">Vehicle Type</label>
                                                <select class="form-control" placeholder="Choose Vehicle" name="type" value="{{ $bike->VEHICLE_TYPE }}">
                                                    <option value="1">Motorcycle</option>
                                                    <option value="2">ATV</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Vehicle Colour -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">Colour</label>
                                                <input type="text" name="colour" placeholder="Colour" class="form-control" autocomplete="off" value="{{ $bike->VEHICLE_COLOR }}"/>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row justify-content-center">

                                        <!-- Size -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">Size</label>
                                                <input required type="text" name="size" placeholder="Enter Size" class="form-control" autocomplete="off" value="{{ $bike->VEHICLE_SIZE }}"/>
                                            </div>
                                        </div>

                                        <!-- Odomoter -->
                                        <div class="col-md-5 col-10 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Odometer</label>
                                                <input required type="text" name="odo" placeholder="000 0000 000" class="form-control" autocomplete="off" value="{{ $bike->VEHICLE_ODO }}"/>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <!-- Notes -->
                                    <div class="row justify-content-center mb-5 ">
                                        <div class="col-10">
                                            <div class="form-floating text-black">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="notes" style="height: 100px" name="notes">{{ $bike->NOTES }}</textarea>
                                                <label for="notes" class="ps-3">Notes</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row justify-content-center">

                                        <!-- Availability -->
                                        <div class="col-auto">
                                            <input type="checkbox" checked class="btn-check" id="btn-check-outlined2" autocomplete="off" name="avail" value="1">
                                            <label class="btn fs-5 text-white border-dark btn-outline-primary btn-danger" id="availLabel" for="btn-check-outlined2">Available</label><br>
                                        </div>

                                    </div>
                                </div>

                                <!-- Save Button -->
                                <div class="d-lg-inline text-center float-lg-end">
                                    <button class="btn btn-success px-2 me-3 mt-4 fs-5">Save Changes</button>
                                </div>
        
                            </form>
                            
                                    
                            <!-- Delete Button --> 
                            <form action="{{ route('admin.vehicles.destroy', ['vehicle', $bike]) }}" method="post" class="d-lg-inline text-center float-lg-end">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger px-3 me-3 my-4 fs-5" onclick="return confirm('Do you want to trash this vehicle?')"><i class="bi bi-trash3"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
        <hr class="border border-dark mt-3 mb-4" />
        
        <!--ATV Section -->
        <a href="#atvs" class="text-decoration-none text-dark text-center" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Course Management">
            <h2>All Terrain Vehicles<i class="bi bi-chevron-down custom-chevron"></i></h2>
        </a> 
        
        <div class="row justify-content-center collapse show" id="atvs">
            @foreach($atvs as $atv)
                <div class="col-12">

                    <div class="card mb-3 shadow-lg bg-dark text-white">
                        <div class="card-body">
                            {{-- For for creating a new user uses info.store route that save a new stuff instance --}}
                            <form action="{{ route('admin.vehicles.store') }}" method="post">
                                @csrf

                                <a href="#atvCollapse{{$loop->iteration}}" data-bs-toggle="collapse" class="text-customWhite" role="button">
                                    <!-- Title -->
                                    <h1 class="card-title text-center mb-5 mt-4">Edit Vehicle</h1>
                                </a>

                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <div class="row justify-content-between">
                                            
                                            <!-- Year -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="font-weight-bold input-group-text">Year</label>
                                                    <input required type="text" name="year" class="form-control" autocomplete="off" value="{{ $atv->VEHICLE_YEAR }}">
                                                </div>
                                            </div>

                                            <!-- Make -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="input-group-text">Make</label>
                                                    <input required type="text" name="make"  placeholder="Vehicle Make" class="form-control" autocomplete="off" value="{{ $atv->VEHICLE_MAKE}}"/>
                                                </div>
                                            </div>

                                            <!-- Model -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="input-group-text">Model</label>
                                                    <input required type="text" name="model" placeholder="Vehicle Model" class="form-control"autocomplete="off" value="{{ $atv->VEHICLE_MODEL }}"/>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="collapse" id="atvCollapse{{$loop->iteration}}">
                                    

                                    <div class="row justify-content-center">

                                        <!-- Stock # -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text" for="stockNo">Stock Number</label>
                                                <input required type="text" class="form-control" name="stockNo" placeholder="Enter Stock No." maxlength="17" autocomplete="off" value="{{ $atv->VEHICLE_STOCK_NUM }}"/>
                                            </div>
                                        </div>

                                        <!-- VIN -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">VIN</label>
                                                <input required class="form-control" type="text" name="vin"  placeholder="Enter VIN" maxlength="17" autocomplete="off" value="{{ $atv->VEHICLE_VIN }}"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row justify-content-center">

                                        <!-- Vehicle Type -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">Vehicle Type</label>
                                                <select class="form-control" placeholder="Choose Vehicle" name="type" value="{{ $atv->VEHICLE_TYPE }}">
                                                    <option value="1">Motorcycle</option>
                                                    <option value="2">ATV</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Vehicle Colour -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">Colour</label>
                                                <input type="text" name="colour" placeholder="Colour" class="form-control" autocomplete="off" value="{{ $atv->VEHICLE_COLOR }}"/>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row justify-content-center">

                                        <!-- Size -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">Size</label>
                                                <input required type="text" name="size" placeholder="Enter Size" class="form-control" autocomplete="off" value="{{ $atv->VEHICLE_SIZE }}"/>
                                            </div>
                                        </div>

                                        <!-- Odomoter -->
                                        <div class="col-md-5 col-10 mb-4">
                                            <div class="input-group">
                                                <label class="input-group-text">Odometer</label>
                                                <input required type="text" name="odo" placeholder="000 0000 000" class="form-control" autocomplete="off" value="{{ $atv->VEHICLE_ODO }}"/>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <!-- Notes -->
                                    <div class="row justify-content-center mb-5 ">
                                        <div class="col-10">
                                            <div class="form-floating text-black">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="notes" style="height: 100px" name="notes" >{{ $atv->NOTES }}</textarea>
                                                <label for="notes" class="ps-3">Notes</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row justify-content-center">

                                        <!-- Availability -->
                                        <div class="col-auto">
                                            <input type="checkbox" checked class="btn-check" id="btn-check-outlined" autocomplete="off" name="avail" value="1">
                                            <label class="btn fs-5 text-white border-dark btn-outline-primary btn-danger" id="availLabel" for="btn-check-outlined">Available</label><br>
                                        </div>

                                    </div>
                                    
                                </div>
                                    
                                <!-- Save Button -->
                                <div class="d-lg-inline text-center float-end">
                                    <button class="btn btn-success px-2 me-3 my-4 fs-5">Save Changes</button>
                                </div>
        
                            </form>
                            
                                    
                            <!-- Delete Button --> 
                            <form action="{{ route('admin.vehicles.destroy', $atv) }}" method="post" class="d-lg-inline text-center float-end">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger px-3 me-3 my-4 fs-5" onclick="return confirm('Do you want to trash this vehicle?')"><i class="bi bi-trash3"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
        <hr class="border border-dark my-3" />
        
    </x-slot>
    
</x-app-layout>