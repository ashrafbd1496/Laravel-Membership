@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="profile">
                        <img src="media/photos/users/{{Auth::user() ->photo}}" alt="avatar.jgp">
                        <h2>Ashraf Uddin</h2>
                        <table class="table table-striped">
                            <tr>
                                <td>Name</td>
                                <td>Ashraf</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Ashraf</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Ashraf</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Ashraf</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
