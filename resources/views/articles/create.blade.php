@extends('layouts.app')

@section('content')

   <div class="container">
    <h1> FORMULAIRE </h1>

       {!! Form::open(['url' => route('articles.store'), 'method' => 'POST']) !!}
       {{ csrf_field() }}

       <br>
       <b>Titre de l'article :</b><br>{!! Form::text('title') !!}
       <br>
       <b>Écrivez votre article :</b><br>{{ Form::textarea('description') }}
       <br>
       {!! Form::submit('Envoyer') !!}
       {!! Form::close() !!}
       @if($errors)
           <ul>
               @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
               @endforeach
           </ul>
       @endif
       
   </div>

    @endsection