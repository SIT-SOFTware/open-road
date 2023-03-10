<x-app-layout>

    <x-carousel name="slide" />

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Frequently Asked Questions</h1>
            <!-- TODO: Only show the following button if user is admin -->
            <!-- TODO: Style the button to fit screen size changes -->
            <a href="{{ route('admin.faq.edit', Storage::get('faq.json')) }}" class="col-1"><button type="button" class="btn btn-danger">Edit Page</button></a>
        </div>
        
        @foreach($faqContents as $key => $faqContent)
        <h2>{{ $faqContents[$key]['Question'] }}</h2>
        <p>{{ $faqContents[$key]['Answer'] }}</p>
        @endforeach

    </x-slot>

</x-app-layout>
