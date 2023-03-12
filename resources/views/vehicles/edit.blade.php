<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            <div class="border rounded p-3 bg-white text-black">
                {{-- For for creating a new user uses info.store route that save a new stuff instance --}}
                <form action="{{ route('admin.vehicles.update', $vehicle) }}" method="post">
                    @csrf
                    @method('put')
                    
                    {{-- First Row --}}
                    <div class="row">
                        {{-- Stock Number --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Stock Number:</u></div>
                            <x-input 
                                type="text" 
                                name="stockNo" field="stockNo" 
                                placeholder="Stock Number"
                                maxlength="17" 
                                class="w-full"
                                autocomplete="off"
                                {{-- If validation fails this shows what was inputed before --}}
                                :value="@old('stockNo', $vehicle->VEHICLE_STOCK_NUM)"></x-input>
                        </div>
                        {{-- Vin --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>VIN:</u></div>
                            <x-input 
                                type="text" 
                                name="vin" field="vin" 
                                placeholder="VIN"
                                maxlength="17" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('vin', $vehicle->VEHICLE_VIN)"></x-input>
                        </div>
                        {{-- Year --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Year:</u></div>
                            <x-input 
                                type="text" 
                                name="year" field="year" 
                                placeholder="Year" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('year', $vehicle->VEHICLE_YEAR)"></x-input>
                        </div>
                        {{-- Make --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Make:</u></div>
                            <x-input 
                                type="text" 
                                name="make" field="make" 
                                placeholder="Make" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('make', $vehicle->VEHICLE_MAKE)"></x-input>
                        </div>
                        {{-- Model --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Model:</u></div>
                            <x-input 
                                type="text" 
                                name="model" field="model" 
                                placeholder="Model" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('model', $vehicle->VEHICLE_MODEL)"></x-input>
                        </div>
                    </div>
                    {{-- Second Row --}}
                    <div class="row">
                        {{-- Odometer --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Odometer:</u></div>
                            <x-input 
                                type="text" 
                                name="odo" field="odo" 
                                placeholder="0000000000" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('odo', $vehicle->VEHICLE_ODO)"></x-input>
                        </div>
                        {{-- Vehicle Type --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Type:</u></div>
                            <select class="custom-select" id="type" name="type">
                                <option value="1" {{ old('type', $vehicle->VEHICLE_TYPE) == 1 ? 'selected' : '' }}>Bike</option>
                                <option value="2" {{ old('type', $vehicle->VEHICLE_TYPE) == 2 ? 'selected' : '' }}>ATV</option>
                            </select>
                            @error('type')
                                <div class="text-red-600 text-sm">Please Select a Vehicle Type</div>
                            @enderror
                        </div>
                        {{-- Colour --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Colour:</u></div>
                            <x-input 
                                type="text" 
                                name="colour" field="colour" 
                                placeholder="Colour" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('colour', $vehicle->VEHICLE_COLOR)"></x-input>
                        </div>
                        {{-- Size --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Size:</u></div>
                            <x-input 
                                type="text" 
                                name="size" field="size" 
                                placeholder="Size" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('size', $vehicle->VEHICLE_SIZE)"></x-input>
                        </div>
                        {{-- Availability --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Available:</u></div>
                            <input type="checkbox" name="avail" value="1">
                        </div>
                        {{-- Notes --}}
                        <div class="font-weight-bold"><u>Notes:</u></div>
                        <x-textarea 
                            name="notes" 
                            field="notes" 
                            rows="3" 
                            placeholder="Start Typing here..." 
                            class="w-full mt-6"
                            :value="@old('notes', $vehicle->NOTES)"></x-textarea>
                        </div>
                    </div>
                    <x-button>Save Information</x-button>
                </form>
            </div>
        </div>
    </x-slot>
    
    </x-app-layout>