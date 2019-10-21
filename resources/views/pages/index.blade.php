@extends('layouts.app')

@section('content')
    <div class="jumbotron center">
        <div class="container">
            <h1 class="display-3">{{$title}}</h1>
            <p>This is the laravel aplication from the "Laravel From Scratch" Youtube series.</p>
            <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            </p>
        </div>
    </div>
    
@endsection