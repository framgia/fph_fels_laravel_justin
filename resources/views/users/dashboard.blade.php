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
                    <a href=#>Learned {{ $user->totalLearnedWordsCount() }} Words</a><br/>
                    <a href="#">Learened {{ $user->lessons()->count() }} Lessons</a>
                </div>
            </div>

        </div>

        <div class="col-md-7 activities">
            <h4 class="activities-header">Activities</h4>
            <hr class="custom-hr">
            @foreach($activities as $activity)
                <div class="row">
                    <div class="col-md-2">
                        <img class="activities-image" src="/uploads/avatars/{{ $activity->user->avatar }}">  
                    </div>
                    <div class="col-md-10">
                        <p class="activities-text">
                            <a href="/profile/{{ $activity->user->id }}">
                                {{ (strcmp($activity->user->name, $user->name)) ? $activity->user->name : 'You' }}
                            </a> 
                            @if($activity->type == 0)
                                followed <a href="/profile/{{ App\User::find(App\Connection::find($activity->reference_id)->following_id)->id }}">{{ App\User::find(App\Connection::find($activity->reference_id)->following_id)->name }}</a>
                            @else
                                got {{ App\Lesson::find($activity->reference_id)->correctLearnedWordsCount() }} of {{ count(App\Lesson::find($activity->reference_id)->learnedWords) }} words correct in <a href="{{ URL::to('/results') . '/' . $activity->user->id . '/' . App\Lesson::find($activity->reference_id)->category_id }}?">{{ App\Category::find(App\Lesson::find($activity->reference_id)->category_id)->title }}</a>
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
