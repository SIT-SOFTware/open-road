<x-app-layout>

    <x-slot name="content">
        <div id="contact" class="container">
            <h1 class="text-center">Image Upload</h1>
            
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
    
                <img src="{{ asset('images/'.Session::get('image')) }}" alt="Uploaded Image">
            @endif
    
            <!-- TODO failure condition -->
            <form method="POST" action="{{ route('advertisements.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" name="advertisement"/>
                <input type="hidden" name="ADVERTISEMENT_ID" value="4">
                <button class="btn btn-sm">Upload</button>
            </form>
        </div> 
    </x-slot>
    
</x-app-layout>