<x-app-layout>

    <x-carousel name="slide" />

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Frequently Asked Questions</h1>
            <x-alert-success>
                    {{ session('success') }}
            </x-alert-success>

        </div>

        @forelse ($faqs as $faq)
            <h2 class="col">{{ $faq->QUESTION }}</h2>
            <div class="row align-items-start">
                <p class="col col-10">{{ $faq->ANSWER }}</p>
                <a href="{{ route('faq.edit', $faq) }}" class="col"><button type="button" class="btn btn-danger">Edit Question</button></a>
            </div>
        @empty
            <p>There are no questions yet.</p>
        @endforelse

        <a href="{{ route('faq.create') }}" class="col-2 mt-6"><button type="button" class="btn btn-danger">Add Question</button></a>

    </x-slot>

</x-app-layout>
