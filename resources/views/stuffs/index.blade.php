<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-carousel name="slide"/>
    
    <x-slot name="content">
        <div>
            <a href="{{ route('info.create') }}">Create New Stuff</a>
            @forelse ( $stuffs as $stuff )
                <div class="border rounded p-3 bg-black text-white">
                    <a href="" style="font-size: 2.0rem;">{{ $stuff->STUFF_PNAME }} {{ $stuff->STUFF_LNAME }}</a>
                    <div class="row">
                        <div class="col">
                            <div class="font-weight-bold"><u>Phone Number:</u></div>
                            <div>{{ $stuff->STUFF_PHONE }}</div>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Email:</u></div>
                            <div>{{ $stuff->STUFF_EMAIL }}</div>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Address 1:</u></div>
                            <div>{{ $stuff->STUFF_ADDR1 }}</div>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Address 2:</u></div>
                            <div>{{ $stuff->STUFF_ADDR2 }}</div>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Province / State:</u></div>
                            <div>{{ $stuff->STUFF_PR_ST }}</div>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>City:</u></div>
                            <div>{{ $stuff->STUFF_CITY }}</div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No Student Data</p>     
            @endforelse
        </div>
    </x-slot>
    
    </x-app-layout>