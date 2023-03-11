<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            {{-- Create New Staff/Student Model redirects to Create blade  --}}
            <a href="{{ route('admin.vehicles.create') }}">Create New Vehicle</a>

            {{-- Display Sudents associated with the User Login --}}
            @forelse ( $vehicles as $vehicle )
                <div class="border rounded p-3 bg-white text-black my-4">
                    <div class="row">
                        <div class="col">
                            <p style="font-size: 2.0rem;">{{ $vehicle->VEHICLE_STOCK_NUM }} {{ $vehicle->VEHICLE_VIN }}</p>  
                        </div>
                        <div class="col">
                            <a href="{{ route('admin.vehicles.show', $vehicle) }}" class="btn btn-danger col"><strong>Show More</strong></a><br/>
                        </div>
                    </div>
                </div>
            {{-- If theres no Data Display This --}}
            @empty
                <p>No Vehicle Data</p>     
            @endforelse
        </div>
    </x-slot>
    
    </x-app-layout>