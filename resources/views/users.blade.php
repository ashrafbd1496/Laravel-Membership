@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a class="btn btn-sm btn-primary float-right ml-5" href="{{url('home')}}">Profile</a><a class="btn btn-sm btn-primary float-right" href="{{route('user.dashboard')}}">Dashboard</a></div>


                <div class="card-body">
                  <h2>All Registered Users</h2>
                    <table class="table table-striped table-responsive">
                        <thead>
                        <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Cell</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all_user as $users)
                            <tr>
                                <td>{{$loop ->index +1}}</td>
                                <td>{{$users ->name}}</td>
                                <td>{{$users ->uname}}</td>
                                <td>{{$users ->cell}}</td>
                                <td>{{$users ->email}}</td>
                                <td><img style="width: 50px;height: 50px;" src="media/photos/users/{{$users ->photo}}" alt=""></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="#">View</a>
                                    <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$all_user ->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
