@extends('layouts.app')

@section('content')


                    <div class="panel-body">
                        <h1>LISTE DES ARTICLES</h1>
                        <a href="{{route('articles.create')}}">Créer un article</a><br>
                        <hr>

                    @foreach($posts as $post)
                        <h2> {{$post->title}} </h2>
                        <h3>Auteur: {{ $post->user->name }}</h3>
                        <p> {{$post->description}} </p>

                            <a href="{{route('articles.show', $post->id)}}">
                                <button class="btn btn-default">
                                    Afficher l'article
                                </button>
                            </a>

                            <a href="{{route('articles.edit', $post->id)}}">
                                <button class="btn btn-default">
                                    Editer l'article
                                </button>
                            </a>

                        <form action="{{route('articles.destroy', $post->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button>SUPPRIMER</button>
                        </form>
                        @endforeach
                    </div>

@endsection
