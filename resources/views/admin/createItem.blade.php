@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <h4 class="activities-header">Create Item for {{ App\Category::find($id)->title }} Category</h4>
        </div>
        <div class="col-md-5">
            <a href="/admin/category/{{ $id }}" class="btn btn-primary pull-right">Back</a>
        </div>
    </div>
    <hr class="custom-hr">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/admin/category/{{ $id }}/item/create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="itemWord">Item Word</label>
                    <input type="text" class="form-control" id="itemWord" name="itemWord" required>
                </div>

                <div class="form-group">
                    <label for="correctAnswer">Correct Answer</label>
                    <input type="text" class="form-control" id="correctAnswer" name="correctAnswer" required>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
