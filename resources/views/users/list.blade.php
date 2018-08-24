@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h4 class="activities-header">User List</h4>
            <hr class="custom-hr">

            <div class="row">
                @foreach($users as $user)
                    <div class="col-md-10 col-md-offset-1 list-container">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="activities-image" src="/uploads/avatars/{{ $user->avatar }}">
                            </div>
                            <div class="col-md-3">
                                <h4><a href="/profile/{{ $user->id }}">
                                    {{ $user->name }}
                                </a></h4>

                                <p>Learned {{ $user->totalLearnedWordsCount() }} Words<br/> Learned {{ $user->lessons()->count() }} Lessons</p>
                            </div>
                            <div class="col-md-4 pull-right">
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
                            <div class="row">
                                    <div class="col-md-6">{{$user->followersCount()}} Followers</div>
                                    <div class="col-md-6">{{$user->followingCount()}} Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
