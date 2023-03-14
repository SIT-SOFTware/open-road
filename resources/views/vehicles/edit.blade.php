<x-app-layout>
    
    <x-slot name="content">

        <div class="container my-4">

            <a href="{{ route('admin.vehicles.index') }}" class="btn btn-dark mb-2 px-2 me-3 mt-4 fs-5">View Vehicles</a>
            
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow-lg bg-dark text-white">
                        <div class="card-body">
                            {{-- For for creating a new user uses info.store route that save a new stuff instance --}}
                            <form action="{{ route('admin.vehicles.store') }}" method="post">
                                @csrf

                                <!-- Title -->
                                <h1 class="card-title text-center mb-5 mt-4">Edit Vehicle</h1>

                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <div class="row justify-content-between">
                                            
                                            <!-- Year -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="font-weight-bold input-group-text">Year</label>
                                                    <input required type="text" name="year" class="form-control" autocomplete="off" value="{{ $vehicle->VEHICLE_YEAR }}">
                                                </div>
                                            </div>

                                            <!-- Make -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="input-group-text">Make</label>
                                                    <input required type="text" name="make"  placeholder="Vehicle Make" class="form-control" autocomplete="off" value="{{ $vehicle->VEHICLE_MAKE}}"/>
                                                </div>
                                            </div>

                                            <!-- Model -->
                                            <div class="col-md-4 col-12 mb-4 mb-md-5">
                                                <div class="input-group">
                                                    <label class="input-group-text">Model</label>
                                                    <input required type="text" name="model" placeholder="Vehicle Model" class="form-control"autocomplete="off" value="{{ $vehicle->VEHICLE_MODEL }}"/>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">

                                    <!-- Stock # -->
                                    <div class="col-md-5 col-10 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text" for="stockNo">Stock Number</label>
                                            <input required type="text" class="form-control" name="stockNo" placeholder="Enter Stock No." maxlength="17" autocomplete="off" value="{{ $vehicle->VEHICLE_STOCK_NUM }}"/>
                                        </div>
                                    </div>

                                    <!-- VIN -->
                                    <div class="col-md-5 col-10 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">VIN</label>
                                            <input required class="form-control" type="text" name="vin"  placeholder="Enter VIN" maxlength="17" autocomplete="off" value="{{ $vehicle->VEHICLE_VIN }}"/>
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center">

                                    <!-- Vehicle Type -->
                                    <div class="col-md-5 col-10 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Vehicle Type</label>
                                            <select class="form-control" placeholder="Choose Vehicle" name="type" value="{{ $vehicle->VEHICLE_TYPE }}">
                                                <option value="1">Motorcycle</option>
                                                <option value="2">ATV</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Vehicle Colour -->
                                    <div class="col-md-5 col-10 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Colour</label>
                                            <input type="text" name="colour" placeholder="Colour" class="form-control" autocomplete="off" value="{{ $vehicle->VEHICLE_COLOR }}"/>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row justify-content-center">

                                    <!-- Size -->
                                    <div class="col-md-5 col-10 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Size</label>
                                            <input required type="text" name="size" placeholder="Enter Size" class="form-control" autocomplete="off" value="{{ $vehicle->VEHICLE_SIZE }}"/>
                                        </div>
                                    </div>

                                    <!-- Odomoter -->
                                    <div class="col-md-5 col-10 mb-4">
                                        <div class="input-group">
                                            <label class="input-group-text">Odometer</label>
                                            <input required type="text" name="odo" placeholder="000 0000 000" class="form-control" autocomplete="off" value="{{ $vehicle->VEHICLE_ODO }}"/>
                                        </div>
                                    </div>

                                </div>
                                
                                <!-- Notes -->
                                <div class="row justify-content-center mb-5 ">
                                    <div class="col-10">
                                        <div class="form-floating text-black">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="notes" style="height: 100px" name="notes">{{ $vehicle->NOTES }}</textarea>
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
                                <!-- Save Button -->
                                <div class="d-lg-inline text-center float-lg-end">
                                    <button class="btn btn-success px-2 me-3 mt-4 fs-5">Save Changes</button>
                                </div>
        
                            </form>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    
    </x-app-layout>