@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>  Articles n° {{$article->id}} <a href="{{route('articles.edit', $article->id)}}">Edit</a> </h1>

        <h2>{{$article->title}}</h2>
        <h3>Auteur: {{ $article->user->name }}</h3>
        <p>{{$article->description}}</p>

    </div>

@endsection