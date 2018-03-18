<?php $chemin = '/laravel/bitsound_v2/public'; ?>
@extends('layouts.app')
@section('content')
    <h1>Créer votre profil</h1>
    <!-- Using Laravel Colletive => https://laravelcollective.com/docs/master/html -->
    {!! Form::open(['action' => 'ArtistsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <label>Votre nom</label>
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nom d\'artiste']) }}
        </div>
        <div class="form-group">
            <label>Parlez-nous un peu de vous</label>
            {{ Form::textarea('biography', '', ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Biographie']) }}
        </div>
        <div class="form-group">
            <label>Le genre de votre son</label>
            {{ Form::text('genre', '', ['class' => 'form-control', 'placeholder' => 'Genre']) }}
        </div>
        <div class="form-group">
            <label>Le lien vers votre compte soundcloud</label>
            {{ Form::text('soundcloud', '', ['class' => 'form-control', 'placeholder' => 'Soundcloud']) }}
        </div>
        <div class="form-group">
            <label>Lien vers votre chaîne Youtube</label>
            {{ Form::text('youtube', '', ['class' => 'form-control', 'placeholder' => 'Youtube Chanel']) }}
        </div>
        {{ Form::submit('Envoyer', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection