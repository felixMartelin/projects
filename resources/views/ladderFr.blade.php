@extends('template')

@section('titrePage')
    Top Ladder
    @endsection

@section('titreItem')
    Classement du Top Ladder Actuel Français
    @endsection

@section('vignette')
        <img src="{{asset('img/trophee.png')}}"  width="10%" height="10%">
@endsection

@section('puce')
    <img src="{{asset('img/star.png')}}"  width="10%" height="10%">
@endsection

@section('pageCourante')
    <h1 class="text-center" > Ladder FR </h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <th> Nom Du Joueur </th>
        <th> Trophées Actuels Du Joueur </th>
        <th> Trophées Max Du Joueur </th>
        <th> Rang Du Joueur (Classement mondial) </th>
        </thead>

        @foreach($lesjoueurs as $joueur)
            <tr>
                <td> {{ $joueur->getNomJoueur() }}</td>
                <td> {{ $joueur->getTropheeJoueur() }}</td>
                <td> {{ $joueur->getTropheeMaxJoueur() }}</td>
                <td> {{ $joueur->getRangJoueur() }}</td>
            </tr>
        @endforeach
    </table>
    @endsection