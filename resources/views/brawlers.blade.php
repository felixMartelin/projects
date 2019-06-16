@extends('template')

@section('titrePage')
    Page Brawlers
    @endsection

@section('vignette')

    <img src="{{asset('/img/logo2.png')}}" width="10%" height="10%">

    @endsection

@section('titreItem')
    Les brawlers
    @endsection

@section('pageCourante')
        <h1 class="text-center" > Liste de tous les brawlers </h1>
@endsection

@section('contenu')
    @foreach($lesbrawlers as $brawler)
        <h2> Fiche Descriptive du Brawler :</h2>
        <br/>
        <h4> Nom du Brawler : {{ $brawler->getNomBrawler() }} </h4>
        <h4> Rareté du Brawler : {{ $brawler->getRareteBrawler() }} </h4>
        <h4> Description du Brawler : {{ $brawler->getDescBrawler() }} </h4>
        <h4> Nom du Stat Power : {{ $brawler->getStarPowerBrawler() }} </h4>
        <h4> Description du Star Power : {{ $brawler->getDescStarPower() }} </h4>
        <br/><br/>
        <h2> Statistiques du Brawler : </h2>
        <br/>
        <h4> Point de Vie du Brawler : {{ $brawler->getVieBrawler() }} </h4>
        <h4> Dégâts du Brawler : {{ $brawler->getDegatBrawler() }} </h4>
        <h4> Dégâts du Super : {{ $brawler->getDegatSuperBrawler() }} </h4>
        <br/><br/><br/><br/>
    @endforeach
    @endsection

<div class="dropdown-menu">
    <a class="dropdown-item" href="brawler/4"> Nita </a>
    <a class="dropdown-item" href="brawler/3"> Jessy </a>
    <a class="dropdown-item" href="brawler/1"> Shelly </a>
    <a class="dropdown-item" href="brawler/2"> Colt </a>
    <a class="dropdown-item" href="brawler/5"> Bull </a>
    <a class="dropdown-item" href="brawler/6"> Brock </a>
    <a class="dropdown-item" href="brawler/7"> Dynamike </a>
    <a class="dropdown-item" href="brawler/8"> Bô </a>
    <a class="dropdown-item" href="brawler/9"> El Costo</a>
    <a class="dropdown-item" href="brawler/9"> Bartaba </a>
    <a class="dropdown-item" href="brawler/11"> Poco </a>
    <a class="dropdown-item" href="brawler/12"> Rosa </a>
    <a class="dropdown-item" href="brawler/14"> Ricochet </a>
    <a class="dropdown-item" href="brawler/15"> Darryl </a>
    <a class="dropdown-item" href="brawler/13"> Penny </a>
    <a class="dropdown-item" href="brawler/16"> Carl </a>
    <a class="dropdown-item" href="brawler/17"> Polly </a>
    <a class="dropdown-item" href="brawler/18"> Pam </a>
    <a class="dropdown-item" href="brawler/19"> Frank </a>
    <a class="dropdown-item" href="brawler/20"> Billie </a>
    <a class="dropdown-item" href="brawler/22"> Tara </a>
    <a class="dropdown-item" href="brawler/23"> D'jinn </a>
    <a class="dropdown-item" href="brawler/21"> Mortis </a>
    <a class="dropdown-item" href="brawler/26"> Léon </a>
    <a class="dropdown-item" href="brawler/25"> Corbac </a>
    <a class="dropdown-item" href="brawler/24"> Spike </a>
</div>