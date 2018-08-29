@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-4">
            <img class="user-image" src="/uploads/avatars/{{ $user->avatar }}">            
            <h4 class="text-center">{{ $user->name }}</h4>
            <hr class="custom-hr">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <p>{{$user->followersCount()}}<br/>followers</p>
                </div>
                <div class="col-md-4 text-center">
                    <p>{{$user->followingCount()}}<br/>following</p>
                </div>
            </div>

             @if(Auth::user()->id != $user->id)
                <div class="row text-center">
                    <form action="/profile" method="POST">
                        <input class="follow-button" type="submit" class="btn btn-sm" value="FOLLOW">
                    </form>
                </div>
            @endif
             <div class="row text-center">
                <a href="#">Learned {{ $user->totalLearnedWordsCount() }} Words</a>
            </div>
        </div>
         <div class="col-md-7 activities">
            <h4 class="activities-header">Activities</h4>
            <hr class="custom-hr">
            <div class="row">
                <div class="col-md-2">
                    <img class="user-image-sm" src="/uploads/avatars/default.jpg">  
                </div>
                <div class="col-md-10">
                    <p class="activities-text"><a href="#">Jane</a> learned 20 of 20 words in <a href="#">Basic 500</a><br/>2 days ago</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img class="user-image-sm" src="/uploads/avatars/default.jpg">  
                </div>
                <div class="col-md-10">
                    <p class="activities-text"><a href="#">Jane</a> learned 20 of 20 words in <a href="#">Basic 500</a><br/>2 days ago</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img class="user-image-sm" src="/uploads/avatars/default.jpg">  
                </div>
                <div class="col-md-10">
                    <p class="activities-text"><a href="#">Jane</a> learned 20 of 20 words in <a href="#">Basic 500</a><br/>2 days ago</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img class="user-image-sm" src="/uploads/avatars/default.jpg">  
                </div>
                <div class="col-md-10">
                    <p class="activities-text"><a href="#">Jane</a> learned 20 of 20 words in <a href="#">Basic 500</a><br/>2 days ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection