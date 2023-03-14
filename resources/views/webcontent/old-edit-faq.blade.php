{{-- THIS PAGE WAS EXPERIMENTAL --}}
{{-- IT IS NO LONGER BEING USED --}}

<x-app-layout>

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Frequently Asked Questions</h1>
        </div>
        
        <form action="" method="post"></form>
            @csrf

            @forelse($faqs as $faq)
            <div class="row justify-content-left border border-dark rounded p-2 mb-2">
                <label for=''>Question:</label>
                <input type='text' class="col-8 rounded" name='' placeholder="Question" value='' />
                <a href="#" class="col-2 mt-6"><button type="button" class="btn btn-danger" onclick="">Delete Question</button></a>
                <label for="}">Answer:</label>
                <textarea class="col-9 rounded" rows="10" name='' placeholder="Answer"></textarea>
                <input type="hidden" name='' value='' />
            </div>
            @empty
            <p>There are no questions.</p>
            @endforelse

            <a href="#" class="col-2 mt-6"><button type="button" class="btn btn-danger">Finish Editing</button></a>
            <a href="{{ route('faq.create') }}" class="col-2 mt-6"><button type="button" class="btn btn-danger">Add Question</button></a>

        </form>

    </x-slot>

</x-app-layout>
