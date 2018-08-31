@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-2">
        <h3>Lessons Learned by {{ (Auth::user()->id == $user->id) ? 'You' : $user->name }}</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Category Title</th>
                    <th scope="col">No. of Items</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lessons as $lesson)
                    <tr>
                        <td>{{ $lesson->getCategoryTitle() }}</td>
                        <td>{{ $lesson->learnedWordsCount() }}</td>
                        <td>{{ $lesson->correctLearnedWordsCount() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {{ $lessons->links() }}
        </div>
    </div>
</div>
@endsection
