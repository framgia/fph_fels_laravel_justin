@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h4 class="activities-header">Create Option for "{{ App\Item::find($id)->word }}" Item</h4>
            <hr class="custom-hr">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/admin/item/{{ $id }}/option/create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="optionWord">Option Word</label>
                    <input type="text" class="form-control" id="optionWord" name="optionWord" required>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
