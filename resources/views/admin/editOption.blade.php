@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h4 class="activities-header">Edit Option for "{{ $option->item->word }}" Item</h4>
            <hr class="custom-hr">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/admin/option/{{ $option->id }}/edit" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="optionWord">Option Word</label>
                    <input type="text" class="form-control" id="optionWord" name="optionWord" value="{{ $option->word }}" required>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
