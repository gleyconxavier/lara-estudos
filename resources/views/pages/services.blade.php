@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <h2>Serviços</h2>
    <p>
        Algumas descrições de serviços.
    </p>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection