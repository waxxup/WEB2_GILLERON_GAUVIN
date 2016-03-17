@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h1>LISTE DES ARTICLES</h1>
                        <hr>

                    @foreach($bap as $bap)
                        <h2> {{$bap->title}} </h2>
                        <p> {{$bap->description}} </p>
@if(Auth::check() && Auth::user()->id == $post->user_id)
                           @endif
                            <a href="{{route('articles.show', $post->id)}}">
                                <button class="btn btn-default">
                                    Voir l'article
                                </button>
                            </a>
                        <form action="{{route('articles.destroy', $post->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button>SUPPRIMER</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
