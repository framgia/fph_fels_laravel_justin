@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <h3>Item Word Options</h3>
    </div>
    <div class="col-md-4">
        <a href="/admin/item/{{ $id }}/option/create" class="btn btn-primary pull-right">Add Options</a>
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
                <tr>
                    <td>Option Word 1</td>
                    <td>true</td>
                    <td><a href="/admin/option/1/edit">Edit</a> | <a href="/admin/option/1/delete">Delete</a></td>
                </tr>
                <tr>
                    <td>Option Word 2</td>
                    <td>false</td>
                    <td><a href="/admin/option/2/edit">Edit</a> | <a href="/admin/option/2/delete">Delete</a></td>
                </tr>
                <tr>
                    <td>Option Word 3</td>
                    <td>false</td>
                    <td><a href="/admin/option/3/edit">Edit</a> | <a href="/admin/option/3/delete">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
