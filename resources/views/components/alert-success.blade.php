@if(session('success'))
<!-- TODO: use colours to make it look pretty -->
    <div class="mb-4 px-4 py-2 bg-success text-white border rounded-3">
        {{ $slot }}
    </div>
@endif