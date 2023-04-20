<x-app-layout>

    <x-carousel name="slide" />

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Meet the Team</h1>
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>
        </div>

        <div class="row">
            @forelse ($teams as $team)
                {{-- TODO add conditional rendering so the link is only a link for admin --}}
                
                <div class="col col-6 align-items-start">
                    @can('update teammate')
                    <a href="{{ route('meet-team.edit', $team) }}" class="col col-6 align-items-start">
                    @endcan
                        <img src="{{ asset($team->FILEPATH) }}" class="w-50 rounded img-thumbnail">
                    @can('update teammate')
                    </a>
                    @endcan
                    <h2 class="col">{{ $team->NAME }}</h2>
                    <h3 class="col">Role: {{ $team->ROLE }}</h3>
                    <p class="fs-5">{{ $team->BIO }}</p>
                </div>
            @empty
                <p>There are no team members yet.</p>
            @endforelse
        </div>

        @can('create teammate')
        <a href="{{ route('meet-team.create') }}" class="col-2 mt-6"><button type="button" class="btn btn-danger">Add Team Member</button></a>
        @endcan

    </x-slot>

</x-app-layout>