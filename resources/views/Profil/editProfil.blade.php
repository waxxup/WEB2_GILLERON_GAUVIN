@extends('layouts.app')

@section('content')

                    <div class="panel-heading">Profile modification</div>

                    <div class="panel-body">
                        Here you can modify your profile.
                    </div>

                    {!! Form::open(['url' => route('profil.store'), 'method' => 'POST']) !!}
                    {{ csrf_field() }}

                    <br>
                    {!! Form::text('name') !!}
                    <br>
                    {{ Form::text('email') }}
                    <br>
                    {!! Form::submit('Envoyer') !!}
                    {!! Form::close() !!}

@endsection
