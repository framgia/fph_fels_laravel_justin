@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h4 class="activities-header">Edit Option</h4>
            <hr class="custom-hr">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/admin/option/1/edit" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="optionWord">Option Word</label>
                    <input type="text" class="form-control" id="optionWord" name="optionWord" value="Option Word" required>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
