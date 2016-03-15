@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="bap col-md-offset-1 col-md-10" style="background-color:#e6e6fa;margin-bottom:30px">

            <h2><label>Titre de la BAP :</label> {{$bap->title}} </h2>
            <div class="col-md-offset-1 col-md-10" style="background-color:white; margin-bottom:10px">
                <h3><label>Nom du client : </label>{{$bap->client}}</h3>
                <p><label>Adresse postale du client : </label>{{$bap->adress}}</p>
                <p><label>Email du client : </label>{{$bap->email}}</p>
                <p><label>Téléphone du client :</label> {{$bap->phone}}</p></div><div style="margin-bottom:10px;background-color:white;" class="col-md-offset-1 col-md-10">
                <p><label>Presenation de la BAP :</label> {{$bap->presentation}} </p>
                <p><label>Type de projet : </label>{{$bap->type}}</p>
                <p><label>Demande du client : </label>{{$bap->demande}}</p>
                <p><label>Contexte du projet :</label> {{$bap->contexte}}</p>
                <p><label>Objectifs du  projet : </label>{{$bap->objectif}}</p>
                <p><label>Contraintes :</label> {{$bap->contraintes}}</p></div></div>

    </div>

@endsection