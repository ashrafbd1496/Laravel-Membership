@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Dashboard</h2>
            <ul class="list-group">

                @if(in_array('User',json_decode(Auth::user() ->role ->permission)))
                <li class="list-group-item"><a href="{{route('user.index')}}">Users</a></li>
                @endif

                @if(in_array('Role',json_decode(Auth::user() ->role ->permission)))
                <li class="list-group-item"><a href="{{route('role.index')}}">Role</a></li>
                    @endif

                    @if(in_array('Settings',json_decode(Auth::user() ->role ->permission)))
                <li class="list-group-item"><a href="">Settings</a></li>
                    @endif

                <li class="list-group-item"><a href="">Seo</a></li>

            </ul>
        </div>
    </div>
</div>
@endsection
