@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <h3>"{{ App\Item::find($id)->word }}" Item</h3>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-9">
                <a href="/admin/category/{{ $options->first()->item->category_id }}" class="btn btn-primary pull-right">Back</a>
            </div>
            <div class="col-md-3">
                <a href="/admin/item/{{ $id }}/option/create" class="btn btn-primary pull-right">Add Options</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Word</th>
                    <th scope="col">is_correct</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($options as $option)
                    <tr>
                        <td>{{ $option->word }}</td>
                        <td>{{ ($option->is_correct) ? "true" : "false"}}</td>
                        <td><a href="/admin/option/{{ $option->id }}/edit">Edit</a> | <a href="/admin/option/{{ $option->id }}/delete">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
