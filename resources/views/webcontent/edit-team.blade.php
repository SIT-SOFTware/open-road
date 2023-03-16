<x-app-layout>

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Edit Team Member</h1>
        </div>

        <form action="{{ route('meet-team.update', $team) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="row justify-content-left border border-dark rounded p-2 mb-2">
                <img src="{{ asset($team->FILEPATH) }}" class="w-25 rounded img-thumbnail">
                <div class="col">
                    <label for="picture" class="mt-2 ms-1 col-9">Upload New Image:</label>
                    <input type="file" name="picture" class="form-control">
                    <label for="name" class="mt-5 ms-1">Member Name:</label>
                    <input
                        type="text"
                        class="col-4 rounded ms-2"
                        field="name"
                        name="name"
                        placeholder="Team Member Name"
                        required
                        value="{{ @Old('name', $team->NAME) }}" />
                    <label for="role" class="ms-4">Member Role:</label>
                    <input
                        type="text"
                        class="col-4 rounded ms-2"
                        field="role"
                        name="role"
                        placeholder="Member Role"
                        required
                        value="{{ @Old('role', $team->ROLE) }}" />
                </div>
                <label for="bio" class="mt-3">Member Bio:</label>
                <textarea
                    name="bio"
                    rows="10"
                    required
                    placeholder="Member Bio">{{ @Old('bio', $team->BIO) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Finish Editing</button>
        </form>

        <form action="{{ route('meet-team.destroy', $team) }}" method="post">
            @method('delete')
            @csrf

            <button type="submit" class="btn btn-danger col-2 mt-6" onclick="return confirm('Are you sure you wish to delete this team member?')">Delete Team Member</button>
        </form>

        <a href="{{ route('meet-team.index') }}"><button class="btn btn-danger col-1 mt-6">Cancel Editing</button></a>

    </x-slot>

</x-app-layout>