@extends('template')

@section('titrePage')
    Accueil BrawlStar
    @endsection


@section('vignette')
        <img src="{{asset('img/logo2.png')}}"  width="10%" height="10%">
@endsection

@section('puce')
    <img src="{{asset('img/star.png')}}"  width="10%" height="10%">
@endsection

@section('titreItem')
    Bienvenu sur le site Brawl Stars Companion
    @endsection

@section('pageCourante')
    <h1 class="text-sm-center"> Accueil </h1>
@endsection

@section('contenu')
    <br/><br/><br/>
    <h3> Bienvenu sur le site non officiel de Brawl Stars sur lequel vous pourrez observer le top ladder actuel
    ainsi que les statistiques détaillées de chaques Brawlers.</h3>
    @endsection