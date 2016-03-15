@extends('layouts.app')

@section('content')

                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
    <a href="{{route('bap.index')}}">Voir les projets BAP</a>

@endsection
