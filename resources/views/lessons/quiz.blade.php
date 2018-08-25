@extends('layouts.app')
@section('content')
<div class="container profile-margin">
    <div class="row">
         <div class="col-md-8 col-md-offset-2 panel panel-default item">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="activities-header">Category Title</h4>
                </div>
                <div class="col-md-2 col-md-offset-4">
                    <h4 class="activities-header">1 of 3</h4>
                </div>
            </div>
            <hr class="custom-hr">
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <h4 class="text-center">Item Word</h4>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <input class="follow-button" type="button" value="Option 1">
                    <input class="follow-button" type="button" value="Option 2">
                    <input class="follow-button" type="button" value="Option 3">
                    <input class="follow-button" type="button" value="Option 4">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection