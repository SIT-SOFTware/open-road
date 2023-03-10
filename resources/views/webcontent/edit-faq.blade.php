<x-app-layout>

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Frequently Asked Questions</h1>
        </div>
        
        <form action="" method="post"></form>
            @method('put')

            @foreach($faqContents as $key => $faqContent)
            <div class="row justify-content-left border border-dark rounded p-2 mb-2">
                <label for='Question{{ $key }}'>Question {{ $faqContents[$key]['Code'] }}:</label>
                <input type='text' class="col-8 rounded" name='Question{{ $key }}' placeholder="Question" value='{{ $faqContents[$key]['Question'] }}' />
                <a href="#" class="col-2 mt-6"><button type="button" class="btn btn-danger" onclick="{{ route('admin.faq.destroy', $key) }}">Delete Question</button></a>
                <label for="Answer{{ $key }}">Answer {{ $faqContents[$key]['Code'] }}:</label>
                <textarea class="col-9 rounded" rows="10" name='Answer{{ $key }}' placeholder="Answer">{{ $faqContents[$key]['Answer'] }}</textarea>
                <input type="hidden" name='Code{{ $key }}' value='{{ $faqContents[$key]['Code'] }}' />
            </div>
            @endforeach

            <a href="#" class="col-2 mt-6"><button type="button" class="btn btn-danger">Finish Editing</button></a>
            <a href="#" class="col-2 mt-6"><button type="button" class="btn btn-danger">Add Question</button></a>

        </form>

    </x-slot>

</x-app-layout>
