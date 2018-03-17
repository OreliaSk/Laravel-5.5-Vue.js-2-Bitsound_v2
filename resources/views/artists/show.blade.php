<?php $chemin = '/laravel/bitsound_v2/public' ;?>

@extends('layouts.app')
@section('content')
    <div class="card bg-faded p-2 m-3 container">
        <a href="{{$chemin}}/artists" class="btn btn-primary">Retour à la liste des artistes</a>
        <h2 class="text-center">{{$artist->name}}</h2>
        <small class="text-center">Posté le {{$artist->created_at->format('d/m/Y H:i:s')}}</small> <!-- Permet de convertir le format DATE -->
        <hr>
        <p>Genre musical : {{ $artist->genre}}</p>
        <p>{{$artist->biography}}</p>
        <small>
            Envie d'écouter plus de sons de {{$artist->name}} ? Retrouvez-les sur
            <a href="{{$artist->soundcloud}}">soundcloud</a>
        </small>
        <small>
            Retrouvez la chaîne Youtube de {{$artist->name}}
            <a href="{{$artist->youtube}}">ici</a>
        </small>
    </div>
@endsection