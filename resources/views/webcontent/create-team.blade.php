<x-app-layout>

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-r">Add a Team Member</h1>
        </div>

        <form action="{{ route('meet-team.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row justify-content-left p-2 mb-2">
                <div class="column">
                    <label for="name">Team Member Name:</label>
                    <input
                        type="text"
                        class="col-4 rounded ms-2"
                        field="name"
                        name="name"
                        placeholder="Team Member Name"
                        required
                        value="" />
                    <label for="role" class="ms-4">Team Member Role:</label>
                    <input
                        type="text"
                        class="col-4 rounded ms-2"
                        field="role"
                        name="role"
                        placeholder="Member Role"
                        required
                        value=""/>
                </div>
                <label for="bio" class="mt-3">Member Bio:</label>
                <textarea
                    name="bio"
                    rows="10"
                    required
                    placeholder="Member Bio"></textarea>
                <label for="picture" class="mt-3">Team Member Picture:</label>
                <input type="file" name="picture" class="form-control">
                @can('create teammate')
                <button
                    type="submit"
                    class="btn btn-danger col-1 mt-2">
                    Add Member
                </button>
                @endcan
            </div>

        </form>

    </x-slot>

</x-app-layout>