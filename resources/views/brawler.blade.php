@extends('template')

@section('titrePage')
    Page Brawlers
    @endsection

@section('vignette')
    @foreach($lebrawler as $brawler)
        <img src="{{asset('img/'.$brawler->getNomBrawler().'.png')}}"  width="10%" height="10%">
    @endforeach
    @endsection

@section('titreItem')
    @endsection

@section('puce')
    <img src="{{asset('img/star.png')}}"  width="10%" height="10%">
    @endsection

@section('pageCourante')
    @foreach($lebrawler as $brawler)
    <h1 class="text-left "> - {{$brawler->getNomBrawler()}}</h1>
    @endforeach
    @endsection

@section('contenu')
    <div class="container">
        @foreach($lebrawler as $brawler)
            <div class="row">
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