<x-app-layout>

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Edit Question</h1>
        </div>
        
        <form action="{{ route('faq.update', $faqs) }}" method="post">
            @method('put')
            @csrf

            <div class="row justify-content-left border border-dark rounded p-2 mb-2">
                <label for='question'>Question:</label>
                <input 
                    type='text'
                    field='question'
                    class="col-12 rounded"
                    name='question'
                    placeholder="Question"
                    autocomplete="off"
                    value="{{ @Old('question', $faqs->QUESTION) }}" />
                <label for="answer">Answer:</label>
                <textarea
                    class="col-12 rounded"
                    rows="10"
                    name='answer'
                    field="answer"
                    placeholder="Answer"
                    value="">{{ @Old('answer', $faqs->ANSWER) }}</textarea>
            </div>
        
            <button type="submit" class="btn btn-success">Finish Editing</button>
        </form>

        <form action="{{ route('faq.destroy', $faqs) }}" method="POST">
            @method('delete')
            @csrf

            <button type="submit" class="btn btn-danger col-1 mt-6" onclick="return confirm('Are you sure you want to delete this question?')">Delete Question</button>

        </form>

        <a href="{{ route('faq.index') }}"><button class="btn btn-danger col-1 mt-6">Cancel Editing</button></a>

    </x-slot>

</x-app-layout>
