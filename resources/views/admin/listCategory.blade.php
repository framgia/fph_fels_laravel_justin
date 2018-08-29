@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <h3>Categories</h3>
    </div>
    <div class="col-md-4">
        <a href="/admin/category/create" class="btn btn-primary pull-right">Add Category</a>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Category Title 1</td>
                    <td>This is the category 1 description</td>
                    <td><a href="/admin/category/1">View Items</a> | <a href="/admin/category/1/edit">Edit</a> | <a href="/admin/category/1/delete">Delete</a></td>
                    <td>Ready</td>
                </tr>
                <tr>
                    <td>Category Title 2</td>
                    <td>This is the category 2 description</td>
                    <td><a href="/admin/category/2">View Items</a> | <a href="/admin/category/2/edit">Edit</a> | <a href="/admin/category/2/delete">Delete</a></td>
                    <td>Not Ready</td>
                </tr>
                <tr>
                    <td>Category Title 3</td>
                    <td>This is the category 3 description</td>
                    <td><a href="/admin/category/3">View Items</a> | <a href="/admin/category/3/edit">Edit</a> | <a href="/admin/category/3/delete">Delete</a></td>
                    <td>Not Ready</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
