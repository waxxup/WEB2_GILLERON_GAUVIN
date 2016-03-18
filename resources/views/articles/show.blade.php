@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>  Articles n° {{$post->id}} @if( Auth::user()->admin == 1) <a href="{{route('articles.edit', $post->id)}}">Edit</a> @endif </h1>

        <h2>{{$post->title}}</h2>
        <h3>Auteur: {{ $post->user->name }}</h3>
        <p>{{$post->description}}</p>
        <div class="row">

        {!! Form::open(['url' => route('articles.store'), 'method' => 'POST']) !!}
        {{ csrf_field() }}

        <br>

        <br>
        <b>Écrivez votre commentaire :</b><br>
            <div class="col-md-12">
            {{ Form::textarea('commentaire', null,array('class' => 'form-control', 'style' => 'width:50%') ) }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('Envoyer', array('class' => 'btn btn-lg btn-success', 'style' => 'width:50%') ) !!}
            </div>
        {!! Form::close() !!}

        @foreach($comments as $comment)
        <div class="row">
            <div class="col-md-5 col-md-offset-2">{{$comment->commentaire}}

            @if( Auth::user()->admin == 1)
                <form action="{{route('articles.destroy', $post->id)}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button>SUPPRIMER</button>
                </form>
            </div>
        </div>
            @endif
        @endforeach
    </div>

@endsection