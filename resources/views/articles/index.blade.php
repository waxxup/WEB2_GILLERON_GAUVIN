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


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
