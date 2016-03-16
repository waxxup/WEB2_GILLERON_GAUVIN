@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> FORMULAIRE </h1>


{!! Form::open(['route' => ['bap.update', $bap->id], 'method'=> 'PUT']) !!}

            {{ csrf_field() }}

        {!! Form::text('title', $bap->title, ['class' => 'form-control']) !!}
        {!! Form::text('client', $bap->client, ['class' => 'form-control']) !!}
        {!! Form::text('adress', $bap->adress, ['class' => 'form-control']) !!}
        {!! Form::text('email', $bap->email, ['class' => 'form-control']) !!}
        {!! Form::text('phone', $bap->phone, ['class' => 'form-control']) !!}
        {!! Form::textarea('presentation', $bap->presentation, ['class' => 'form-control']) !!}
        {{ Form::select('type', [
           'Site Internet' => 'Site Internet',
           'Installation multimédia' => 'Installation Multimédia',
           'Jeu Video' => 'Jeu Video',
           '3D' => '3D',
           'DVD' => 'DVD',
           'Print' => 'Print',
           'CD-ROM' => 'CD-ROM',
           'Autre' => 'Autre',
           'Evenement' => 'Evenement',
           'Animation 2d' => 'Animation 2d'], $bap->type,array('class' => 'form-control', 'style' => 'width:50%')
        ) }}
        {!! Form::textarea('contexte', $bap->contexte, ['class' => 'form-control']) !!}
        {!! Form::textarea('demande', $bap->demande, ['class' => 'form-control']) !!}
        {!! Form::textarea('objectif', $bap->objectif, ['class' => 'form-control']) !!}
        {!! Form::textarea('contraintes', $bap->contraintes, ['class' => 'form-control']) !!}
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