<?php $chemin = '/laravel/bitsound_v2/public'; ?>
@extends('layouts.app')
@section('content')
    <h1>Festivals</h1>
    @if(count($festivals)> 0)
        @foreach($festivals as $post)
            <div class="card bg-faded p-2 m-3">
                <h3><a href="{{$chemin}}/festivals/{{$festival->id}}">{{$festival->title}}</a></h3>
                <small>Posté le {{$festival->created_at->format('d/m/Y H:i:s')}}</small> <!-- Permet de convertir le format DATE -->
                <p>{{$festival->description}}</p>
            </div>
        @endforeach  
        {{$festivals->links()}} <!-- Pour la pagination -->
    @else
    <h2>Il n'y a pas de festivals pour le moment </h2>
    @endif
@endsection