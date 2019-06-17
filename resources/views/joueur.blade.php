@extends('template')

@section('titrePage')
    Page Joueur
    @endsection

@section('vignette')

    <img src="{{asset('img/logo2.png')}}"  width="10%" height="10%">

    @endsection

@section('titreItem')
    @endsection

@section('puce')
    <img src="{{asset('img/star.png')}}"  width="10%" height="10%">
@endsection

@section('pageCourante')
    @foreach($lejoueur as $joueur)
        <h1 class="text-left "> - Page du joueur : {{$joueur->getNomJoueur()}}</h1>
    @endforeach
@endsection

@section('contenu')
    <div class="container">
        @foreach($lejoueur as $joueur)
                <div class="col-sm border-right">
                    <h2> Fiche Descriptive du Joueur :</h2>
                    <br/>
                    <p> <b>Nom du Joueur</b> : {{ $joueur->getNomJoueur() }} </p>
                    <p> <b>Trophée Max du Joueur </b> : {{ $joueur->getTropheeMaxJoueur() }} </p>
                    <p> <b>Trophée Actuel du Joueur</b> : {{ $joueur->getTropheeJoueur() }} </p>
                    <p> <b>Rang du Joueur (Mondial) </b> : {{ $joueur->getRangJoueur() }} </p>
                    @endforeach
                </div>
                <div class="col-sm">
                    <h2> Statistiques des Brawlers : </h2>
                    <br/>
                    @foreach($lesbrawlers as $brawler)
                    <p> <b> Id Du Brawler </b> : </b> {{ $brawler->getIdBrawler() }} </p>
                    <p> <b> Trohpée du Brawler</b> : {{ $brawler->getTropheeBrawler() }} </p>
                    <p> <b> Niveau du Brawler </b> : {{ $brawler->getNiveauBrawler() }} </p>
                        <br/>
                        @endforeach
                </div>
            </div>
    @endsection
