@extends('template')

@section('titrePage')
    Page Brawlers
    @endsection

@section('vignette')

    <img src="{{asset('/img/logo2.png')}}" width="10%" height="10%">

    @endsection

@section('titreItem')
    @endsection

@section('puce')
    <img src="{{asset('img/star.png')}}"  width="10%" height="10%">
@endsection

@section('pageCourante')
        <h1 class="text-left" > - Liste de tous les brawlers </h1>
@endsection

@section('contenu')
    <div class="container">
        @foreach($lesbrawlers as $brawler)
            <div class="row justify-content-center">
                <img src="{{asset('img/'.$brawler->getNomBrawler().'.png')}}"  width="115px" height="150px">
            </div>
            <div class="row border-bottom shadow-lg p-3 mb-5 bg-white rounded" style="background-image: url({{asset('img/'.$brawler->getIdBrawler().'.png')}})">
                <div class="col-sm border-right">
                    <h2> Fiche Descriptive du Brawler :</h2>
                    <br/>
                    <p> <b>Nom du Brawler</b> : {{ $brawler->getNomBrawler() }} </p>
                    <p> <b>Rareté du Brawler</b> : {{ $brawler->getRareteBrawler() }} </p>
                    <p> <b>Description du Brawler</b> : {{ $brawler->getDescBrawler() }} </p>
                    <p> <b>Nom du Stat Power</b> : {{ $brawler->getStarPowerBrawler() }} </p>
                    <p> <b>Description du Star Power</b> : {{ $brawler->getDescStarPower() }} </p>
                </div>
                <div class="col-sm">
                    <h2> Statistiques du Brawler : </h2>
                    <br/>
                    <p> <b>Point de Vie du Brawler</b> : </b> {{ $brawler->getVieBrawler() }} </p>
                    <p> <b>Dégâts du Brawler</b> : {{ $brawler->getDegatBrawler() }} </p>
                    <p> <b>Dégâts du Super</b> : {{ $brawler->getDegatSuperBrawler() }} </p>
                </div>
            </div>
        @endforeach
    </div>
    @endsection
