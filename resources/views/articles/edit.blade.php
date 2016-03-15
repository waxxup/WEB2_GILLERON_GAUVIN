@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> FORMULAIRE </h1>


{!! Form::open(['route' => ['articles.update', $post->id], 'method'=> 'PUT']) !!}

            {{ csrf_field() }}

        {!! Form::select('user_id', $users, $post->user_id) !!}

            <br>
        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}

            <br>
        {!! Form::textarea('description', $post->description, ['class' => 'form-control']) !!}

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