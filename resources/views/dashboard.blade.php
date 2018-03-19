<?php $chemin = '/laravel/bitsound_v2/public' ;?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <div class="card p-3">
                <h2 class="card-title text-center">Votre profil</h2>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <!--<a href="/artists/create" class="card-link btn btn-success">Créer votre page artiste</a>
                        <a href="/artists/edit" class="card-link btn btn-primary">Editer votre profil</a>
                        <a href="#" class="card-link btn btn-success">Ajouter une news</a>-->
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
