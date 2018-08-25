@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <h3>Category Title</h3>
    </div>
    <div class="col-md-4 pull-right">
        <h3>Result: 2 of 3</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Word</th>
              <th scope="col">Correct Answer</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Ohayou</td>
              <td>Good morning</td>
              <td><span class="glyphicon glyphicon-ok-circle"></span></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Hai</td>
              <td>Yes</td>
              <td><span class="glyphicon glyphicon-remove-circle"></span></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Osakini</td>
              <td>I'll go ahead</td>
              <td><span class="glyphicon glyphicon-ok-circle"></span></td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
@endsection
