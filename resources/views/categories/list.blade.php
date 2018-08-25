@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h4 class="activities-header">Category List</h4>
            <hr class="custom-hr">

            @foreach($categories as $category)
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 list-container">
                        <div class="row">
                            <div class="col-md-3">
                                <h4>{{ $category->title }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>{{ $category->description }}</p>
                            </div>
                            <div class="col-md-4 pull-right">
                                @if(Auth::user()->isLearned($category->id))
                                    <form action="#" method="POST">
                                        <input class="result-button" type="submit" class="btn btn-sm" value="VIEW RESULTS">
                                    </form>
                                @else
                                    <form action="#" method="POST">
                                        <input class="learn-button" type="submit" class="btn btn-sm" value="LEARN">
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
