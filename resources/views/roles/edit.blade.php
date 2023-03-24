<x-app-layout>

    <x-slot name="content">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Role</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back </a>
                </div>
            </div>
        </div>


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> something went wrong.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('roles.update', $role->id) }}" method="post">
            @method('PATCH')
            @csrf
        {{-- {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!} --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                            <input type="text" name="name" id="name" placeholder="Role Name" class="form-control" />
                        {{-- {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!} --}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br/>
                        @foreach($permission as $value)
                            <label>
                                <input type="checkbox" value="on" name="{{ $value->name }}" id="{{ $value->id }}"
                                @if (!old() || old($value->name) == 'on' ) checked="checked" @endif />
                            {{-- <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }} --}}
                            {{ $value->name }}</label>
                        <br/>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        {{-- {!! Form::close() !!} --}}
    </x-slot>
</x-app-layout>