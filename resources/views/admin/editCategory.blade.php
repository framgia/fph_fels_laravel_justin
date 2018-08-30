@extends('layouts.app')

@section('content')
<div class="container profile-margin">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <h4 class="activities-header">Edit Category</h4>
        </div>
        <div class="col-md-5">
            <a href="/admin/category" class="btn btn-primary pull-right">Back</a>
        </div>
    </div>
    <hr class="custom-hr">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/admin/category/{{ $category->id }}/edit" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="categoryTitle">Category Title</label>
                    <input type="text" class="form-control" id="categoryTitle" name="categoryTitle" value="{{ $category->title }}" required>
                </div>

                <div class="form-group">
                    <label for="categoryDescription">Category Description</label>
                    <textarea class="form-control" id="categoryDescription" name="categoryDescription" rows="3" required>{{ $category->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
