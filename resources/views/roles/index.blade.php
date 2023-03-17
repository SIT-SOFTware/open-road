<x-app-layout>

        <x-slot name="content">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Role Management</h2>
                    </div>
                    <div class="pull-right">
                       @can('create role')
                            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role </a>
                        @else
                            invalid permissions
                        @endcan
                    </div>
                </div>
            </div>


            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                        @can('update role')
                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                        @endcan
                        @can('trash role')
                            <form action="{{ route('roles.destroy', $role->id) }}" method="post" class="display-inline">
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </table>

            {!! $roles->render() !!}

    </x-slot>
</x-app-layout>
