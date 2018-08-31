@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <h3>Words Learned by {{ $user->name }}</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Item Word</th>
                    <th scope="col">Correct Answer</th>
                    <th scope="col">User Answer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($learnedWords as $learnedWord)
                    @if($learnedWord->lesson->category->status)
                        <tr>
                            <td>{{ $learnedWord->lesson->getCategoryTitle() }}</td>
                            <td>{{ $learnedWord->getItemWord() }}</td>
                            <td>{{ $learnedWord->getCorrectWord() }}</td>
                            <td>{{ $learnedWord->user_answer }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {{ $learnedWords->links() }}
        </div>
    </div>
</div>
@endsection
