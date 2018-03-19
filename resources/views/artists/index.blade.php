<?php $chemin = '/laravel/bitsound_v2/public'; ?>
@extends('layouts.app')
@section('content')
    <h1>Artistes</h1>
    @if(count($artists)> 0)
        @foreach($artists as $artist)
            <div class="card bg-faded p-2 m-3">
                <h3><a href="{{$chemin}}/artists/{{$artist->id}}">{{$artist->name}}</a></h3>
            <small>Fiche artiste créee le {{$artist->created_at->format('d/m/Y H:i:s')}} par {{$artist->user->name}}</small> <!-- Permet de convertir le format DATE -->
                <p>{{$artist->description}}</p>
            </div>
        @endforeach  
        {{$artists->links()}} <!-- Pour la pagination -->
    @else
    <h2>Il n'y a pas d'artistes pour le moment </h2>
    @endif
@endsection