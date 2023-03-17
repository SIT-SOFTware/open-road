<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        
        <div class="container">
            <!-- Title -->
            <h1 class="text-dark text-center mt-3">Users</h2>
            <hr class="border border-dark" />
    
            <!-- Add Class Button-->
            <a href="{{ route('info.create') }}" class="btn btn-success p-2 me-2 mb-2 fs-5">Add User</a>

            @forelse ( $stuffs as $stuff )
                <a href="{{ route('info.edit', $stuff) }}" class="text-customWhite text-decoration-none">
                    <div class="row justify-content-center mb-3 ">
                        <div class="col">
                            <div class="card bg-dark p-3 shadow-lg">
                                <div class="card-body">

                                    <div class="row text-center justify-content-around fs-4">

                                        <div class="col-auto text-decoration-underline my-auto align-middle">
                                            <h2>{{ $stuff->STUFF_FNAME }} {{ $stuff->STUFF_LNAME }}:</h2>
                                        </div>
                                    
                                        <div class="col-auto">
                                            <h4 class="text-decoration-underline">Phone Number</h4>
                                            {{ $stuff->STUFF_PHONE }}
                                        </div>
                                        
                                        <div class="col-auto">
                                            <h4 class="text-decoration-underline">Email</h4>
                                            {{ $stuff->STUFF_EMAIL }}
                                        </div>

                                        <div class="col-auto">
                                            <h4 class="text-decoration-underline">Address 1</h4>
                                            {{ $stuff->STUFF_ADDR1 }}
                                        </div>

                                        <div class="col-auto">
                                            <h4 class="text-decoration-underline">Address 2</h4>
                                            {{ $stuff->STUFF_ADDR2 }}
                                        </div>

                                        <div class="col-auto">
                                            <h4 class="text-decoration-underline">Province</h4>
                                            {{ $stuff->STUFF_PR_ST }}
                                        </div>
                                        
                                        <div class="col-auto">
                                            <h4 class="text-decoration-underline">City</h4>
                                            {{ $stuff->STUFF_CITY }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <p>No Student Data</p>     
            @endforelse
        </div>
        
    </x-slot>
    
</x-app-layout>