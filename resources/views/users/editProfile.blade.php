@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <h4 class="activities-header">Edit Profile</h4>
        </div>
        <div class="col-md-5">
            <a href="/profile/{{ $user->id }}" class="btn btn-primary pull-right">Back</a>
        </div>
    </div>
    <hr class="custom-hr">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form enctype="multipart/form-data" action="/edit/profile" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Avatar</label>
                    <input type="file" name="avatar">
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
