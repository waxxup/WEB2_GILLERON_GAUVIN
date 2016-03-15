@extends('layouts.app')

@section('content')

                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
                <a href="{{route('bap.index')}}">Voir les projets BAP</a><br>
                <a href="{{route('bap.create')}}">Proposer son projet BAP</a>
@endsection
