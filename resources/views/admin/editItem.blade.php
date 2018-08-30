@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h4 class="activities-header">Edit Item for {{ App\Category::find($id)->title }} Category</h4>
            <hr class="custom-hr">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/admin/item/{{ $item->id }}/edit" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="itemWord">Item Word</label>
                    <input type="text" class="form-control" id="itemWord" name="itemWord" value="{{ $item->word }}" required>
                </div>

                <div class="form-group">
                    <label for="correctAnswer">Correct Answer</label>
                    <input type="text" class="form-control" id="correctAnswer" name="correctAnswer" value="{{ $item->getCorrectWord() }}" required>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
