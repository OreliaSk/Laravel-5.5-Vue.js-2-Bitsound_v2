<?php $chemin = '/laravel/bitsound_v2/public' ;?>
@extends('layouts.app')
    @section('content')
        <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            <p>Ceci est la page d'accueil</p>
            <a href="{{$chemin}}/login" class="btn btn-primary">Se connecter</a>
            <a href="{{$chemin}}/register" class="btn btn-danger">S'enregistrer</a>
        </div>
    @endsection
