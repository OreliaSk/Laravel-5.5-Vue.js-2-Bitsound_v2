<?php $chemin = '/laravel/bitsound_v2/public' ;?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <div class="card p-3">
                <h2 class="card-title text-center">Votre profil</h2>
                <p class="text-center">
                    <img style="height:20vh; border: 1px solid #ccc; border-radius:50%" src="{{$chemin}}/storage/avatars/{{$artist->avatar}}" alt="avatar" >
                </p>
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        @if(!$artist)
                        <table class="table table-stripped">
                            <tr>
                                <th>Vous n'avez pas encore créer votre page artiste :'(</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th><a href="{{$chemin}}/artists/create" class="card-link btn btn-primary">Créer ma page maintenant</a></th>
                                <th></th>
                            </tr>
                        </table>
                        @else
                        <table class="table table-stripped">
                            <tr>
                                <th>Titre</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>{{$artist->name}}</th>
                                <th><a href="{{$chemin}}/artists/{{$artist->id}}/edit" class="card-link btn btn-primary">Editer votre profil</a></th>
                                <th><a href="{{$chemin}}/artists/{{$artist->id}}/edit" class="card-link btn btn-success">Rédiger un commentaire</a></th>
                                <th>
                                    {!!Form::open(['action' => ['ArtistsController@destroy', $artist->id], 'method' => 'POST', 'class' => 'm-2' ])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{ Form::submit('Supprimer votre profil', ['class' => 'btn btn-danger']) }}
                                    {!!Form::close()!!}
                                </th>
                            </tr>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
