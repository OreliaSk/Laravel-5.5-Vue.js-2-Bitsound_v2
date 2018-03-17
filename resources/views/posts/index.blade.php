<?php $chemin = '/laravel/bitsound_v2/public'; ?>
@extends('layouts.app')
@section('content')
    <h1>Articles</h1>
    @if(count($posts)> 0)
        @foreach($posts as $post)
            <div class="card bg-faded p-2 m-3">
                <h3><a href="{{$chemin}}/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Posté le {{$post->created_at->format('d/m/Y H:i:s')}}</small> <!-- Permet de convertir le format DATE -->
                <p>{{$post->description}}</p>
            </div>
        @endforeach  
        {{$posts->links()}} <!-- Pour la pagination -->
    @else
    <h2>Il n'y a pas d'articles pour le moment </h2>
    @endif
@endsection