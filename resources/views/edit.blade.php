@extends('layout')
@section('main')
    <div class="container">
        <h4 class="text-center">Edit Mode</h4>
        <form method="POST" action="/update">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"
                    value="{{ $user->name }}">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description"
                    value="{{ $user->description }}">
                    <input type="hidden" class="form-control" id="exampleInputPassword1" name="token"
                    value="{{$user->token}}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
@endsection
