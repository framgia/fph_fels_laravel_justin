@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h4 class="activities-header">Create Item</h4>
            <hr class="custom-hr">
        </div>
    </div>
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
