<x-app-layout>


    <x-slot name="content">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit New User</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back </a>
                </div>
            </div>
        </div>


        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif


        <form action="{{ route('users.update', $user->id)}}" method="post" class="">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" id="name" placeholder="Name" value="{{ $user->name }}" class="form-control" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" id="email" placeholder="Email" value="{{ $user->email }}" class="form-control" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" class="form-control" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        <select name="roles" id="roles" class="form-control">
                            <option value="none">Select Role</option>
                            @foreach ($roles as $role )
                                @if ($user->hasRole($role))
                                    <option value="{{ $role }}" selected>{{ $role }}</option>
                                @else
                                    <option value="{{ $role }}">{{ $role }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>


    </x-slot>
</x-app-layout>
