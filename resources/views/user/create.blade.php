@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>User Name</h2>
                <a href="{{route('user.index')}}" class="btn btn-sm btn-primary float-right">All User</a>

                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name="name" class="form-control" type="text" placeholder="Enter Full Name">
                    </div>

                    <div class="form-group">
                        <input name="uname" class="form-control" type="text" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <input name="email" class="form-control" type="text" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input name="cell" class="form-control" type="text" placeholder="Enter cell">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select class="form-control" name="role" id="">

                            @foreach($roles as $role)
                            <option value="{{$role ->id}}">{{$role ->name}}</option>
                            @endforeach
                        </select>

                    </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit" value="Add">Add New User</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
