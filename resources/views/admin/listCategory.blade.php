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
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td><a href="/admin/category/{{ $category->id }}">View Items</a> | <a href="/admin/category/{{ $category->id }}/edit">Edit</a> | <a href="/admin/category/{{ $category->id }}/delete">Delete</a></td>
                        @if($category->status == false)
                            <td>Not Ready</td>
                        @else
                            <td>Ready</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection
