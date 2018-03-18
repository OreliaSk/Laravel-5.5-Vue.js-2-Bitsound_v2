<?php $chemin = '/laravel/bitsound_v2/public' ;?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <div class="card p-3">
                <h2 class="card-title text-center">Votre profil</h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <a href="{{$chemin}}/artists/create" class="card-link btn btn-success">Créer votre page artiste</a>
                        <a href="{{$chemin}}/artists/edit" class="card-link btn btn-primary">Editer votre profil</a>
                        <a href="#" class="card-link btn btn-success">Ajouter une news</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
