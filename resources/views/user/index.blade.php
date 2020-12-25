@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>All User</h2>
            <a href="{{route('user.create')}}" class="btn btn-sm btn-primary float-right">Add New User</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Permission</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($all_user as $user)
                <tr>
                    <td>{{$loop ->index+1}}</td>
                    <td>{{$user ->name}}</td>
                    <td>{{$user ->role ->name}}</td>
                    <td>
                        @foreach(json_decode($user ->role ->permission) as $per)
                        {{$per}} |
                        @endforeach
                    </td>

                    <td>
                        <a class="btn btn-sm btn-warning" href="">Edit</a>
                        <a class="btn btn-sm btn-danger" href="">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
