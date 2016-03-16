@extends('layouts.app')

@section('content')

                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
                <a href="{{route('bap.index')}}">Voir les projets BAP (accessible aux guest)</a><br>
                <a href="{{route('bap.create')}}">Proposer son projet BAP (restreint aux connectés)</a><br>
                <h2>Comptes de test en seeder :</h2>
                <p>Pour se connecter à un compte non-admin : <label>Email : </label> "random@random.fr"  | <label>Password : </label>  "random"</p>

                <p>Pour se connecter au compte admin :  <label>Email:</label> "admin@admin.fr" | <label>Password:</label> "admin"</p>
@endsection
