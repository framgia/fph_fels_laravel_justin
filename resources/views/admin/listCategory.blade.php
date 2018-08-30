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
                        <td class="text-center">
                        @if($category->status == false)
                            <a href="/admin/category/{{ $category->id }}/toggleStatus" class="btn btn-danger btn-sm">Not Ready</a>
                        @else
                            <a href="/admin/category/{{ $category->id }}/toggleStatus" class="btn btn-primary btn-sm">Ready</a>
                        @endif
                        </td>
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
