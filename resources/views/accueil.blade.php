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
    @endsection

@section('pageCourante')
    <h1 class="text-center"> Accueil </h1>
@endsection

@section('contenu')
    <h4 style="text-align: center"> Bienvenu sur le site non officiel de Brawl Stars sur lequel vous pourrez observer le top ladder actuel
    ainsi que les statistiques détaillées de chaques Brawlers.</h4>
    <div class="container">
        <div class="row justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" style="heigh:1200px; width:700px">
                    <div class="carousel-item active">
                        <a href="https://www.youtube.com/watch?v=CaryjOdYFa0" target="_blank">
                            <img src="{{asset('img/video1-800.jpg')}}" class="d-block w-100" width="20%" heigh="20%">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="https://www.youtube.com/watch?v=KLfqHkyxDVM" target="_blank">
                            <img src="{{asset('img/video2-800.jpg')}}" class="d-block w-100" width="20%" heigh="20%">
                        </a>
                    </div>
                    <div class="carousel-item ">
                        <a href="https://www.youtube.com/watch?v=ZI1zBx1NHpE" target="_blank">
                            <img src="{{asset('img/video3-800.jpg')}}" class="d-block w-100" width="20%" heigh="20%">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="https://www.youtube.com/watch?v=ss48H4HFDB0" target="_blank">
                            <img src="{{asset('img/video4-800.jpg')}}" class="d-block w-100" width="20%" heigh="20%">
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    @endsection