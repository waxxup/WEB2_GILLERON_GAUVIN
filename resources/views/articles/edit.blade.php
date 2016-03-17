@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> FORMULAIRE </h1>


{!! Form::open(['route' => ['bap.update', $bap->id], 'method'=> 'PUT']) !!}

            {{ csrf_field() }}


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