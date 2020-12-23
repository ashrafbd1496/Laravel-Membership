@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Dashboard</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{url('users')}}">All Users</a></li>
                <li class="list-group-item"><a href="{{url('home')}}">Add New User</a></li>
                <li class="list-group-item"><a href="">Add New Roel</a></li>
                <li class="list-group-item"><a href="">Settings</a></li>
                <li class="list-group-item"><a href="">Seo</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
