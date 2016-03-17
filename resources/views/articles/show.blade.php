@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>  Articles n° {{$post->id}} @if( Auth::user()->admin == 1) <a href="{{route('articles.edit', $post->id)}}">Edit</a> @endif </h1>

        <h2>{{$post->title}}</h2>
        <h3>Auteur: {{ $post->user->name }}</h3>
        <p>{{$post->description}}</p>

        <form action="{{route('articles.create', $post->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="POST">
            <button>Commenter</button>
        </form>
        @foreach($comments as $comment)
            <p>{{$comment->commentaire}}</p>
        @endforeach
    </div>

@endsection