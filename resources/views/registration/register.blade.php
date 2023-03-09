<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-carousel name="slide"/>
    
    <x-slot name="content">
        <div>
            <div class="border rounded p-3 bg-grey text-white row">
                <form action="{{ route('info.destroy', $stuff) }}" method="post">
                    <div class='col'>
                        <div class="font-weight-bold"><u>Course:</u></div>
                        <div class="font-weight-bold">{{ $stuff->STUFF_PNAME }}</div>
                    </div>
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger col" onclick="return confirm('Are you sure you wish to delete this student?')">Delete</button>
                </form>
            </div>
        </div>
    </x-slot>
    
    </x-app-layout>