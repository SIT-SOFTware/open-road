<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            {{-- Create New Staff/Student Model redirects to Create blade  --}}
            <a href="{{ route('info.create') }}">Create New Stuff</a>

            {{-- Display Sudents associated with the User Login --}}
            @forelse ( $stuffs as $stuff )
                <div class="border rounded p-3 bg-white text-black my-4">
                    <div class="row">
                        <div class="col">
                            <p style="font-size: 2.0rem;">{{ $stuff->STUFF_PNAME }} {{ $stuff->STUFF_LNAME }}</p>  
                        </div>
                        <div class="col">
                            <a href="{{ route('info.show', $stuff)}}" class="btn btn-danger col"><strong>Show More</strong></a><br/>
                        </div>
                    </div>
                </div>
            {{-- If theres no Data Display This --}}
            @empty
                <p>No Student Data</p>     
            @endforelse
        </div>
    </x-slot>
    
    </x-app-layout>