<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            <div class="border rounded p-3 bg-white text-black row my-4">
                {{-- Display Student Info --}}
                <p style="font-size: 2.0rem;">({{ $stuff->STUFF_PNAME }}) {{ $stuff->STUFF_FNAME }} {{ $stuff->STUFF_LNAME }}:</p>
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
                {{-- Edit and Delete Buttons --}}
                <div class="row">
                    <a href="{{ route('info.edit', $stuff)}}" class="btn btn-danger col"><strong>Edit</strong></a>
                    <form action="{{ route('info.destroy', $stuff) }}" method="post" class="col">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you wish to delete this student?')">Delete</button>
                    </form>
                    <a href="{{ route('info.index')}}" class="btn btn-danger col"><strong>Back</strong></a>
                </div>
            </div>
        </div>
    </x-slot>
    
</x-app-layout>