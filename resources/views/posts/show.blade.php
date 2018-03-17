<?php $chemin = '/laravel/bitsound_v2/public' ;?>

@extends('layouts.app')
@section('content')
    <div class="card bg-faded p-2 m-3 container">
        <a href="{{$chemin}}/posts" class="btn btn-primary">Retour à la liste des articles</a>
        <h2 class="text-center">{{$post->title}}</h2>
        <small class="text-center">Posté le {{$post->created_at->format('d/m/Y H:i:s')}}</small> <!-- Permet de convertir le format DATE -->
        <hr>
        <p>{{$post->content}}</p>
    </div>
@endsection