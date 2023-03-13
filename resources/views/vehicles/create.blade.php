<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>

    <x-slot name="content">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-11">
                    <div class="card shadow-lg bg-dark text-white">
                        <div class="card-body">
                            {{-- For for creating a new user uses info.store route that save a new stuff instance --}}
                            <form action="{{ route('admin.vehicles.store') }}" method="post">
                                @csrf

                                <!-- Title -->
                                <h1 class="card-title text-center mb-5 mt-4">New Vehicle</h1>

                                <div class="row justify-content-center my-4">

                                    {{-- First Row --}}
                                    <div class="row">
                                        {{-- Stock Number --}}
                                        <div class="col-md-3 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text" for="stockNo">Stock Number: </label>
                                                <x-input 
                                                type="text" 
                                                name="stockNo" 
                                                field="stockNo" 
                                                placeholder="Stock Number" 
                                                maxlength="17" 
                                                class="w-full form-control" 
                                                autocomplete="off" 
                                                {{-- If validation fails this shows what was inputed before --}} 
                                                :value="@old('stockNo')"></x-input>
                                            </div>
                                        </div>
                                        {{-- Vin --}}
                                        <div class="col-md-3 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text">VIN Number:</label>
                                                <x-input 
                                                type="text" 
                                                name="vin" 
                                                field="vin" 
                                                placeholder="VIN" 
                                                maxlength="17" 
                                                class="w-full form-control" 
                                                autocomplete="off" 
                                                :value="@old('vin')"></x-input>
                                            </div>
                                        </div>
                                        {{-- Year --}}
                                        <div class="col-md-2 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text">Year:</label>
                                                <x-input 
                                                type="text" 
                                                name="year" 
                                                field="year" 
                                                placeholder="Year" 
                                                class="w-full form-control" 
                                                autocomplete="off" 
                                                :value="@old('year')"></x-input>
                                            </div>
                                        </div>
                                        {{-- Make --}}
                                        <div class="col-md-2 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text">Make:</label>
                                                <x-input 
                                                type="text" 
                                                name="make" 
                                                field="make" 
                                                placeholder="Make" 
                                                class="w-full form-control" 
                                                autocomplete="off" 
                                                :value="@old('make')"></x-input>
                                            </div>
                                        </div>
                                        {{-- Model --}}
                                        <div class="col-md-2 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text">Model:</label>
                                                <x-input 
                                                type="text" 
                                                name="model" 
                                                field="model" 
                                                placeholder="Model" 
                                                class="w-full form-control"
                                                autocomplete="off" 
                                                :value="@old('model')"></x-input>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Second Row --}}
                                    <div class="row">

                                        {{-- Odometer --}}
                                        <div class="col-md-2 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text">Otometer:</label>
                                                <x-input 
                                                type="text"
                                                name="odo"
                                                field="odo"
                                                placeholder="0000000000"
                                                class="w-full form-control"
                                                autocomplete="off"
                                                :value="@old('odo')"></x-input>
                                            </div>
                                        </div>
                                        {{-- Vehicle Type --}}
                                        <div class="col-md-5 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="input-group-text" for="courseID">Vehicle Type</label>
                                                <select class="form-control" placeholder="Select Vehicle Type" id="type" name="type">
                                                    <option selected>Choose Vehicle</option>
                                                    <option value="1">Bike</option>
                                                    <option value="2">ATV</option>
                                                </select>
                                                @error('type')
                                                <div class="text-red-600 text-sm">Please Select a Vehicle Type</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- Colour --}}
                                        <div class="col-md-3 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text">Colour:</label>
                                                <x-input
                                                type="text"
                                                name="colour"
                                                field="colour"
                                                placeholder="Colour"
                                                class="w-full form-control"
                                                autocomplete="off"
                                                :value="@old('colour')"></x-input>
                                            </div>
                                        </div>
                                        {{-- Size --}}
                                        <div class="col-md-2 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text">Size:</label>
                                                <x-input
                                                type="text"
                                                name="size"
                                                field="size"
                                                placeholder="Size"
                                                class="w-full form-control"
                                                autocomplete="off"
                                                :value="@old('size')"></x-input>
                                            </div>
                                        </div>
                                        {{-- Availability --}}
                                        <div class="col-md-2 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off" name="avail" value="1">
                                                <label class="btn btn-outline-primary" for="btn-check-outlined">Available</label><br>
                                            </div>
                                        </div>
                                        {{-- Notes --}}
                                        <div class="col-md-5 mb-4 mb-md-5 col-9">
                                            <div class="input-group">
                                                <label class="font-weight-bold input-group-text">Notes:</label>
                                                <x-textarea
                                                name="notes"
                                                field="notes"
                                                rows="3"
                                                placeholder="Start Typing here..."
                                                class="w-full mt-6 form-control"
                                                :value="@old('notes')"></x-textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <x-button>Save Information</x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>