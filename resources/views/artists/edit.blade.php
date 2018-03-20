<?php $chemin = '/laravel/bitsound_v2/public'; ?>
@extends('layouts.app')
@section('content')
    <h1>Editer votre profil</h1>
    <!-- Using Laravel Colletive => https://laravelcollective.com/docs/master/html -->
    {!! Form::open(['action' => ['ArtistsController@update', $artist->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
        <div class="form-group">
            <label>Votre nom</label>
            {{ Form::text('name', $artist->name, ['class' => 'form-control', 'placeholder' => 'Nom d\'artiste']) }}
        </div>
        <div class="form-group">
            <label>Parlez-nous un peu de vous</label>
            {{ Form::textarea('biography', $artist->biography, ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Biographie']) }}
        </div>
        <div class="form-group">
            <label>Le genre de votre son</label>
            {{ Form::text('genre', $artist->genre, ['class' => 'form-control', 'placeholder' => 'Genre']) }}
        </div>
        <div class="form-group">
            <label>Le lien vers votre compte soundcloud</label>
            {{ Form::text('soundcloud', $artist->soundcloud, ['class' => 'form-control', 'placeholder' => 'Soundcloud']) }}
        </div>
        <div class="form-group">
            <label>Lien vers votre chaîne Youtube</label>
            {{ Form::text('youtube', $artist->youtube, ['class' => 'form-control', 'placeholder' => 'Youtube Chanel']) }}
        </div>
        <div class="form-group">
            {{ Form::file('avatar') }}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection