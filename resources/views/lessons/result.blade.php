@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <h3>{{ $lesson->getCategoryTitle() }}</h3>
    </div>
    <div class="col-md-4 pull-right">
        <h3>Result: {{ $lesson->correctLearnedWordsCount() }} of {{ $lesson->learnedWordsCount() }}</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Word</th>
              <th scope="col">Correct Answer</th>
              <th scope="col">Your Answer</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($lesson->learnedWords as $learnedWord)
                <tr>
                    <td>{{ $learnedWord->getItemWord() }}</td>
                    <td>{{ $learnedWord->getCorrectWord() }}</td>
                    <td>{{ $learnedWord->user_answer }}</td>
                    @if($learnedWord->isCorrect())
                        <td><span class="glyphicon glyphicon-ok-circle"></span></td>
                    @else
                        <td><span class="glyphicon glyphicon-remove-circle"></span></td>
                    @endif
                </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection
