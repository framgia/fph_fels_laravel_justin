@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-4">
            <h4 class="activities-header">Dashboard</h4>
            <div class="row">
                <div class="col-md-4">
                    <img class="user-image-sm" src="/uploads/avatars/{{ $user->avatar }}">
                </div>   
                <div class="col-md-8">     
                    <h4>{{ $user->name }}</h4>
                    <a href=#>Learned 20 words</a><br/>
                    <a href="#">Learened 5 lessons</a>
                </div>
            </div>

        </div>

        <div class="col-md-7 activities">
            <h4 class="activities-header">Activities</h4>
            <hr class="custom-hr">
            <div class="row">
                <div class="col-md-2">
                    <img class="activities-image" src="/uploads/avatars/default.jpg">  
                </div>
                <div class="col-md-10">
                    <p class="activities-text"><a href="#">Jane</a> learned 20 of 20 words in <a href="#">Basic 500</a><br/>2 days ago</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img class="activities-image" src="/uploads/avatars/default.jpg">  
                </div>
                <div class="col-md-10">
                    <p class="activities-text"><a href="#">Jane</a> learned 20 of 20 words in <a href="#">Basic 500</a><br/>2 days ago</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img class="activities-image" src="/uploads/avatars/default.jpg">  
                </div>
                <div class="col-md-10">
                    <p class="activities-text"><a href="#">Jane</a> learned 20 of 20 words in <a href="#">Basic 500</a><br/>2 days ago</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img class="activities-image" src="/uploads/avatars/default.jpg">  
                </div>
                <div class="col-md-10">
                    <p class="activities-text"><a href="#">Jane</a> learned 20 of 20 words in <a href="#">Basic 500</a><br/>2 days ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
