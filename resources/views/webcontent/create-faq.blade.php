<x-app-layout>

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Add a Question</h1>
        </div>

        <form action="{{ route('faq.store') }}" method="post">
            @csrf

            <div class="row justify-content-left p-2 mb-2">
                <label for='question'>Question:</label>
                <input
                    type='text'
                    class="col-8 rounded"
                    field='question'
                    name='question'
                    placeholder="Question"
                    value='' />
                <button
                    type="submit"
                    class="btn btn-danger col-1 ms-2">
                        Add Question
                </button>
                <label for="answer">Answer:</label>
                <textarea
                    class="col-9 rounded"
                    rows="10"
                    name='answer'
                    placeholder="Answer"></textarea>
            </div>

        </form>

    </x-slot>

</x-app-layout>