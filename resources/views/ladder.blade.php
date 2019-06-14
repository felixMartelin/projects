@extends('template')

@section('titrePage')
    Top Ladder
    @endsection

@section('titreItem')
    Classement du Top Ladder Actuel Mondial
    @endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
        <th> Nom Du Joueur </th>
        <th> Trophées Actuels Du Joueur </th>
        <th> Trophées Max Du Joueur </th>
        <th> Rang Du Joueur </th>
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