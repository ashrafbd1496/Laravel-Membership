@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Role Name</h2>
                <a href="{{route('role.index')}}" class="btn btn-sm btn-primary float-right">All Roles</a>

                <form action="{{route('role.store')}}" method="POST">
                    @csrf
                    <div class="form-group">

                        <input name="name" class="form-control" type="text" placeholder="Enter Role Name">
                    </div>

                    <div class="form-group">
                        <label for="">Permission</label><br>
                        <input name="per[]" value="User" class="" type="checkbox" id="User"> <label for="User">User</label>
                        <input name="per[]" value="Role" class="" type="checkbox" id="Role"> <label for="Role">Role</label>
                        <input name="per[]" value="Settings" class="" type="checkbox" id="Settings"> <label for="Settings">Settings</label>
                        <input name="per[]" value="Seo" class="" type="checkbox" id="Seo"> <label for="Seo">Seo</label>
                    </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit" value="Add">Add New Role</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
