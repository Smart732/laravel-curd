@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            @foreach ($user ?? '' as $data)
                <div class="col-4">{{ $data->name }}</div>
                <div class="col-4"> {{ $data->description }}</div>
                <div class="col-4">
                    <a href="/edit/{{ $data->token }}"> <button class="btn btn-success">Edit</button></a>
                    <a href="/delete/{{ $data->token }}"> <button class="btn btn-danger m-2">Delete</button></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
