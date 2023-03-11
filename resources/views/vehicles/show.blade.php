<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            <div class="border rounded p-3 bg-white text-black my-4">
                {{-- Display Student Info --}}
                <p style="font-size: 2.0rem;">Stock Number: {{ $vehicle->VEHICLE_STOCK_NUM }} 
                    VIN: {{ $vehicle->VEHICLE_VIN }}</p>
                <div class="row">
                    <div class="col">
                        <div class="font-weight-bold"><u>Year:</u></div>
                        <div>{{ $vehicle->VEHICLE_YEAR }}</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bold"><u>Make:</u></div>
                        <div>{{ $vehicle->VEHICLE_MAKE }}</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bold"><u>Model:</u></div>
                        <div>{{ $vehicle->VEHICLE_MODEL }}</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bold"><u>Odometer:</u></div>
                        <div>{{ $vehicle->VEHICLE_ODO }}</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bold"><u>Colour:</u></div>
                        <div>{{ $vehicle->VEHICLE_COLOR }}</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bold"><u>Engine Size:</u></div>
                        <div>{{ $vehicle->VEHICLE_SIZE }}</div>
                    </div>
                </div>
                {{-- Edit and Delete Buttons --}}
                <div class="row">
                    <a href="{{ route('admin.vehicles.edit', $vehicle)}}" class="btn btn-danger col"><strong>Edit</strong></a>
                    <form action="{{ route('admin.vehicles.destroy', $vehicle) }}" method="post" class="col">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you wish to delete this student?')">Delete</button>
                    </form>
                    <a href="{{ route('admin.vehicles.index')}}" class="btn btn-danger col"><strong>Back</strong></a>
                </div>
            </div>
        </div>
    </x-slot>
    
</x-app-layout>