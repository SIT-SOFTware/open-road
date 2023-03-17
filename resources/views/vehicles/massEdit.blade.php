<x-app-layout>
    
    <x-slot name="content">
        
        <div class="row">
            <div class="col-3">
                <a href="{{ route('admin.vehicles.create') }}" class="btn btn-success p-2 mt-4 fs-5">Add Vehicle</a>
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
                <div class="col-12">

                    <div class="card mb-3 shadow-lg bg-dark text-white">
                        <div class="card-body">
                            
                            <form action="{{ route('admin.vehicles.update', $bike) }}" method="post">
                                @method('put')
                                @csrf

                                <a href="#bikeCollapse{{$loop->iteration}}" data-bs-toggle="collapse" class="text-customWhite" role="button">
                                    <!-- Title -->
                                    <h1 class="card-title text-center mb-3">Edit Vehicle</h1>
                                </a>

                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <div class="row justify-content-between">
                                            
                                            <!-- Year -->
                                            <div class="col-md-4 col-12 mb-4 ">
                                                <div class="input-group">
                                                    <label class="font-weight-bold input-group-text">Year</label>
                                                    <input required type="text" name="year" class="form-control" autocomplete="off" value="{{ $bike->VEHICLE_YEAR }}">
                                                </div>
                                            </div>

                                            <!-- Make -->
                                            <div class="col-md-4 col-12 mb-4">
                                                <div class="input-group">
                                                    <label class="input-group-text">Make</label>
                                                    <input required type="text" name="make"  placeholder="Vehicle Make" class="form-control" autocomplete="off" value="{{ $bike->VEHICLE_MAKE}}"/>
                                                </div>
                                            </div>

                                            <!-- Model -->
                                            <div class="col-md-4 col-12 mb-4">
                                                <div class="input-group">
                                                    <label class="input-group-text">Model</label>
                                                    <input required type="text" name="model" placeholder="Vehicle Model" class="form-control"autocomplete="off" value="{{ $bike->VEHICLE_MODEL }}"/>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="collapse" id="bikeCollapse{{$loop->iteration}}">


                                    <div class="row mt-md-4 justify-content-center">

                                        <!-- Vehicle Type -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">Vehicle Type</label>

                                                <select class="form-control" placeholder="Choose Vehicle" name="type"">
                                                    <option selected value="{{  @Old('vehicleType', $bike->VEHICLE_TYPE) }}">{{  @Old('vehicleType', $bike->VEHICLE_TYPE) == 2 ? 'ATV' : 'Motorcycle'  }}</option>
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
                                                <textarea class="form-control" placeholder="Leave a comment here" id="notes" style="height: 100px" name="notes" field="notes">{{  @Old('notes', $bike->NOTES) }}</textarea>
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
                                <div class="d-inline text-center float-end">
                                    <button class="btn btn-success px-2 me-3 my-3 fs-5">Save Changes</button>
                                </div>
        
                            </form>
                            
                                    
                            <!-- Delete Button --> 
                            <form action="{{ route('admin.vehicles.destroy', ['vehicle', $bike]) }}" method="post" class="d-inline text-center float-end">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger px-3 me-3 my-3 fs-5" onclick="return confirm('Do you want to trash this vehicle?')"><i class="bi bi-trash3"></i></button>
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
                            
                            <form action="{{ route('admin.vehicles.update', $atv) }}" method="post">
                                @method('put')
                                @csrf

                                <a href="#atvCollapse{{$loop->iteration}}" data-bs-toggle="collapse" class="text-customWhite" role="button">
                                    <!-- Title -->
                                    <h1 class="card-title text-center mb-3">Edit Vehicle</h1>
                                </a>

                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <div class="row justify-content-between">
                                            
                                            <!-- Year -->
                                            <div class="col-md-4 col-12 mb-4 ">
                                                <div class="input-group">
                                                    <label class="font-weight-bold input-group-text">Year</label>
                                                    <input required type="text" name="year" class="form-control" autocomplete="off" value="{{ $atv->VEHICLE_YEAR }}">
                                                </div>
                                            </div>

                                            <!-- Make -->
                                            <div class="col-md-4 col-12 mb-4">
                                                <div class="input-group">
                                                    <label class="input-group-text">Make</label>
                                                    <input required type="text" name="make"  placeholder="Vehicle Make" class="form-control" autocomplete="off" value="{{ $atv->VEHICLE_MAKE}}"/>
                                                </div>
                                            </div>

                                            <!-- Model -->
                                            <div class="col-md-4 col-12 mb-4">
                                                <div class="input-group">
                                                    <label class="input-group-text">Model</label>
                                                    <input required type="text" name="model" placeholder="Vehicle Model" class="form-control"autocomplete="off" value="{{ $atv->VEHICLE_MODEL }}"/>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="collapse" id="atvCollapse{{$loop->iteration}}">

                                    <div class="row mt-md-4 justify-content-center">

                                        <!-- Vehicle Type -->
                                        <div class="col-md-5 col-10 mb-4 mb-md-5">
                                            <div class="input-group">
                                                <label class="input-group-text">Vehicle Type</label>
                                                
                                                <select class="form-control" placeholder="Choose Vehicle" name="type"">
                                                    <option selected value="{{  @Old('vehicleType', $atv->VEHICLE_TYPE) }}">{{  @Old('vehicleType', $atv->VEHICLE_TYPE) == 2 ? 'ATV' : 'Motorcycle' }}</option>
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
                                                <textarea class="form-control" placeholder="Leave a comment here" id="notes" style="height: 100px" name="notes" field="notes">{{  @Old('notes', $atv->NOTES) }}</textarea>
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
                                <div class="d-inline text-center float-end">
                                    <button class="btn btn-success px-2 me-3 my-3 fs-5">Save Changes</button>
                                </div>
        
                            </form>
                            
                                    
                            <!-- Delete Button --> 
                            <form action="{{ route('admin.vehicles.destroy', ['vehicle', $atv]) }}" method="post" class="d-inline text-center float-end">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger px-3 me-3 my-3 fs-5" onclick="return confirm('Do you want to trash this vehicle?')"><i class="bi bi-trash3"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
        <hr class="border border-dark my-3" />
        <!-- Dynamic Checkbox Script -->
        <script>
            // Get the checkbox element
            const checkbox = document.getElementById('btn-check-outlined');

            // Get the label element
            const label = document.getElementById('availLabel');

            // Set the initial text of the label
            label.textContent = checkbox.checked ? 'Available' : 'Unavailable';

            // Add an event listener to the checkbox to update the label text when it is checked or unchecked
            checkbox.addEventListener('change', function() {
                label.innerHTML = this.checked ? 'Available' : 'Unavailable';
            });
        </script>
        
    </x-slot>
    
</x-app-layout>