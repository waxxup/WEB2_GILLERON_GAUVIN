@extends('layouts.app')

@section('content')


                    <div class="panel-body">
                        <h1>LISTE DES PROJETS BAP</h1>
                        <hr>

                        @foreach($baps as $bap)
                            <div class="bap" style="background-color:#e6e6fa">
                            <h2>Titre de la BAP : {{$bap->title}} </h2>
                            <h3>Nom du client : {{$bap->client}}</h3>
                                <p>Adresse postale du client : {{$bap->adress}}</p>
                                <p>Email du client : {{$bap->email}}</p>
                                <p>Téléphone du client : {{$bap->phone}}</p>

                            <p>Presenation de la BAP : {{$bap->presentation}} </p>




                            </div>

                        @endforeach
                    </div>

@endsection
