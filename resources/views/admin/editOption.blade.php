@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <h4 class="activities-header">Edit Option for "{{ $option->item->word }}" Item</h4>
        </div>
        <div class="col-md-5">
            <a href="/admin/item/{{ $option->item_id }}" class="btn btn-primary pull-right">Back</a>
        </div>
    </div>
    <hr class="custom-hr">

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
