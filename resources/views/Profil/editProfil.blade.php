@extends('layouts.app')

@section('content')

                    <div class="panel-heading">Profile modification</div>

                    <div class="panel-body">
                        Here you can modify your profile.
                    </div>

                    {!! Form::open (['route' => ['Profil.update', $user->id], 'method'=> 'PUT'])  !!}

                    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}

                    {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}

                    {!! Form::submit('Envoyer') !!}


                    {!! Form::close() !!}

@endsection
