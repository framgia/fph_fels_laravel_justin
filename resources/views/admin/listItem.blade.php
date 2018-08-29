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
                <tr>
                    <td>Item Word 1</td>
                    <td>Correct Option 1</td>
                    <td><a href="/admin/item/1">View Options</a> | <a href="/admin/item/1/edit">Edit</a> | <a href="/admin/item/1/delete">Delete</a></td>
                </tr>
                <tr>
                    <td>Item Word 2</td>
                    <td>Correct Option 2</td>
                    <td><a href="/admin/item/2">View Options</a> | <a href="/admin/item/2/edit">Edit</a> | <a href="/admin/item/2/delete">Delete</a></td>
                </tr>
                <tr>
                    <td>Item Word 3</td>
                    <td>Correct Option 3</td>
                    <td><a href="/admin/item/3">View Options</a> | <a href="/admin/item/3/edit">Edit</a> | <a href="/admin/item/3/delete">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
