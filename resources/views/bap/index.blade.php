@extends('layouts.app')

@section('content')


                    <div class="panel-body">
                        <h1>LISTE DES ARTICLES</h1>
                        <hr>

                        @foreach($baps as $bap)
                            <h2> {{$bap->title}} </h2>
                            <p> {{$bap->description}} </p>


                        @endforeach
                    </div>

@endsection
