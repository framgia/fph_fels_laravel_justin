@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <h3>Category Name Items</h3>
    </div>
    <div class="col-md-4">
        <a href="/admin/category/{{ $id }}/item/create" class="btn btn-primary pull-right">Add Item</a>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Word</th>
                    <th scope="col">Correct Answer</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->word }}</td>
                        <td>{{ $item->getCorrectWord() }}</td>
                        <td><a href="/admin/item/{{ $item->id }}">View Options</a> | <a href="/admin/item/{{ $item->id }}/edit">Edit</a> | <a href="/admin/item/{{ $item->id }}/delete">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
