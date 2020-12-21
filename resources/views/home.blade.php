@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a class="btn btn-sm btn-primary float-right" href="{{url('users')}}">All Users</a></div>

                <div class="card-body">
                    <div class="profile">
                        <img src="media/photos/users/{{Auth::user() ->photo}}" alt="avatar.jgp">
                        <h2>{{Auth::user() ->name}}</h2>
                        <table class="table table-striped">
                            <tr>
                                <td>Name</td>
                                <td>{{Auth::user() ->name}}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{Auth::user() ->uname}}</td>
                            </tr>
                            <tr>
                                <td>Cell</td>
                                <td>{{Auth::user() ->cell}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{Auth::user() ->email}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
