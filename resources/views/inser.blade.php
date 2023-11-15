@extends('layout')
@section('main')
<form method="POST" action="/insert" class="container">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    
    <button type="submit" class="btn btn-primary">ADD</button>
  </form>
@endsection