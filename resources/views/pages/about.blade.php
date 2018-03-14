@extends('layouts.app')
    @section('content')
        <h1>Bitsound (version 2.0)</h1>
        <p>Ceci est la page about</p>
        @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
    @endsection
