<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">

    <x-alert-success>
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
            {{-- If theres no Data Display This --}}
            @empty
                <p>No Vehicle Data</p>     
            @endforelse
        </div>
    </x-slot>
    
    </x-app-layout>