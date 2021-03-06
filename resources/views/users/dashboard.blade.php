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
                    <a href=#>Learned {{ $user->totalLearnedWordsCount() }} words</a><br/>
                    <a href="#">Learened {{ $user->lessons()->count() }} lessons</a>
                </div>
            </div>

        </div>

        <div class="col-md-7 activities">
            <h4 class="activities-header">Activities</h4>
            <hr class="custom-hr">
            @foreach($activities as $activity)
                <div class="row">
                    <div class="col-md-2">
                        <img class="activities-image" src="/uploads/avatars/default.jpg">  
                    </div>
                    <div class="col-md-10">
                        <p class="activities-text">
                            <a href="/profile/{{ $activity->user->id }}">
                                {{ (strcmp($activity->user->name, $user->name)) ? $activity->user->name : 'You' }}
                            </a> 
                            @if($activity->type == 0)
                                followed <a href="/profile/{{ $activity->getFollowingUser()->id }}">{{ $activity->getFollowingUser()->name }}</a>
                            @else
                                learned {{ $activity->getLesson()->correctLearnedWordsCount() }} of {{ $activity->getLesson()->learnedWords->count() }} words in <a href="#">{{ $activity->getLesson()->category->title }}</a>
                            @endif



                            <br/>{{ $activity->updated_at->diffForHumans() }}

                        </p>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                {{ $activities->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
