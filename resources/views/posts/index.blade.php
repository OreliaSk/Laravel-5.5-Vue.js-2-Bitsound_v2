@extends('layouts.app')
@section('content')
    <h1>Articles</h1>
    @if(count($posts)> 0)
        @foreach($posts as $post)
            <div class="card bg-faded p-2 m-3">
                <h3>{{$post->title}}</h3>
                <small>Posté le {{$post->created_at->format('d-m-Y')}}</small> // Permet de convertir le format DATE
                <p>{{$post->description}}</p>
            </div>
        @endforeach  
    @else
    <h2>Il n'y a pas d'articles pour le moment </h2>
    @endif
@endsection