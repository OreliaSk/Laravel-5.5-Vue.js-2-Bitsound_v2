<?php $chemin = '/laravel/bitsound_v2/public' ;?>

@extends('layouts.app')
@section('content')
    <div class="card bg-faded p-2 m-3 container">
        <a href="{{$chemin}}/artists" class="btn btn-primary">Retour à la liste des artistes</a>
        <h2 class="text-center">{{$artist->name}}</h2>
        <img class="d-block mx-auto" style="height:20vh; width:12vw; border: 1px solid #ccc; border-radius:50%" src="{{$chemin}}/storage/avatars/{{$artist->avatar}}" alt="avatar" >
        <small class="text-center">Posté le {{$artist->created_at->format('d/m/Y H:i:s')}}</small> <!-- Permet de convertir le format DATE -->
        <hr>
        <img style="width:50px; height:50px;" src="/storage/avatars/{{$artist->avatar}}" alt="">
        <p><span class="font-weight-bold">Genre musical :</span> {{ $artist->genre}}</p>
        <!-- Afin de parser l'HTML lors de l'affichage, on utilise les !! -->
        <p>{!!$artist->biography!!}</p>
        <small>
            Envie d'écouter plus de sons de {{$artist->name}} ? Retrouvez-les sur
            <a href="{{$artist->soundcloud}}">soundcloud</a>
        </small>
        <small>
            Retrouvez la chaîne Youtube de {{$artist->name}}
            <a href="{{$artist->youtube}}">ici</a>
        </small>
        <hr>
        <div class="container">
            @include('comments.index')
        </div>
    </div>
@endsection