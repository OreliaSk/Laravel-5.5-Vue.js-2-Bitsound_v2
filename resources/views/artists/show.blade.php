<?php $chemin = '/laravel/bitsound_v2/public' ;?>

@extends('layouts.app')
@section('content')
    <div class="card bg-faded p-2 m-3 container">
        <a href="{{$chemin}}/artists" class="btn btn-primary">Retour à la liste des artistes</a>
        <h2 class="text-center">{{$artist->name}}</h2>
        <small class="text-center">Posté le {{$artist->created_at->format('d/m/Y H:i:s')}}</small> <!-- Permet de convertir le format DATE -->
        <hr>
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
        @if(!Auth::guest())
            @if(Auth::user()->id == $artist->user_id)
                <a href="{{$chemin}}/artists/{{$artist->id}}/edit" class="btn btn-success mr-auto m-2">Editer votre profil</a>
                {!!Form::open(['action' => ['ArtistsController@destroy', $artist->id], 'method' => 'POST', 'class' => 'pull-right m-2' ])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{ Form::submit('Supprimer votre profil', ['class' => 'btn btn-danger']) }}
                {!!Form::close()!!}
            @endif
        @endif
    </div>
@endsection