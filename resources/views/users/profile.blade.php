@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-4">
            <img class="user-image" src="/uploads/avatars/{{ $user->avatar }}">            
            <h4 class="text-center">{{ $user->name }}</h4>
            <hr class="custom-hr">
           <!-- <form enctype="multipart/form-data" action="/profile" method="POST">
               <input type="file" name="avatar">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="submit" class="pull-right btn btn-sm btn-primary">
           </form> -->
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
                    @if(Auth::user()->isFollowing($user->id))
                        <form action="/unfollow/{{$user->id}}" method="POST">
                            {{ csrf_field() }}
                            <input class="unfollow-button" type="submit" class="btn btn-sm" value="UNFOLLOW">
                        </form>
                    @else
                        <form action="/follow/{{$user->id}}" method="POST">
                            {{ csrf_field() }}
                            <input class="follow-button" type="submit" class="btn btn-sm" value="FOLLOW">
                        </form>
                    @endif
                </div>
            @endif
             <div class="row text-center">
                <a href="#">Learned {{ $user->totalLearnedWordsCount() }} Words</a>
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
                                {{ (strcmp($activity->user->name, Auth::user()->name)) ? $activity->user->name : 'You' }}
                            </a> 
                            @if($activity->type == 0)
                                followed <a href="/profile/{{ App\User::find(App\Connection::find($activity->reference_id)->following_id)->id }}">{{ App\User::find(App\Connection::find($activity->reference_id)->following_id)->name }}</a>
                            @else
                                learned {{ App\Lesson::find($activity->reference_id)->correctLearnedWordsCount() }} of {{ count(App\Lesson::find($activity->reference_id)->learnedWords) }} words in <a href="#">{{ App\Category::find(App\Lesson::find($activity->reference_id)->category_id)->title }}</a>
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