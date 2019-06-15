<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
{!! Html::style('lib/bootstrap/bootstrap.min.css') !!}
{!! Html::style('css/basique.css') !!}
<title>@yield('titrePage')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <div class="container">

        <img src="../img/logo.png" width="10%" height="10%">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="accueil">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link dropdown-toggle" href="brawlers" id="navbardrop" data-toggle="dropdown">
                        Les Brawlers
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/brawler/4') }}"> Nita </a>
                        <a class="dropdown-item" href="{{ url('/brawler/3') }}"> Jessy </a>
                        <a class="dropdown-item" href="{{ url('/brawler/1') }}"> Shelly </a>
                        <a class="dropdown-item" href="{{ url('/brawler/2') }}"> Colt </a>
                        <a class="dropdown-item" href="{{ url('/brawler/5') }}"> Bull </a>
                        <a class="dropdown-item" href="{{ url('/brawler/6') }}"> Brock </a>
                        <a class="dropdown-item" href="{{ url('/brawler/7') }}"> Dynamike </a>
                        <a class="dropdown-item" href="{{ url('/brawler/8') }}"> Bô </a>
                        <a class="dropdown-item" href="{{ url('/brawler/9') }}"> El Costo</a>
                        <a class="dropdown-item" href="{{ url('/brawler/10') }}"> Bartaba </a>
                        <a class="dropdown-item" href="{{ url('/brawler/12') }}"> Poco </a>
                        <a class="dropdown-item" href="{{ url('/brawler/13') }}"> Rosa </a>
                        <a class="dropdown-item" href="{{ url('/brawler/14') }}"> Ricochet </a>
                        <a class="dropdown-item" href="{{ url('/brawler/15') }}"> Darryl </a>
                        <a class="dropdown-item" href="{{ url('/brawler/13') }}"> Penny </a>
                        <a class="dropdown-item" href="{{ url('/brawler/16') }}"> Carl </a>
                        <a class="dropdown-item" href="{{ url('/brawler/17') }}"> Polly </a>
                        <a class="dropdown-item" href="{{ url('/brawler/18') }}"> Pam </a>
                        <a class="dropdown-item" href="{{ url('/brawler/19') }}"> Frank </a>
                        <a class="dropdown-item" href="{{ url('/brawler/20') }}"> Billie </a>
                        <a class="dropdown-item" href="{{ url('/brawler/22') }}"> Tara </a>
                        <a class="dropdown-item" href="{{ url('/brawler/23') }}"> D'jinn </a>
                        <a class="dropdown-item" href="{{ url('/brawler/21') }}"> Mortis </a>
                        <a class="dropdown-item" href="{{ url('/brawler/26') }}"> Léon </a>
                        <a class="dropdown-item" href="{{ url('/brawler/25') }}"> Corbac </a>
                        <a class="dropdown-item" href="{{ url('/brawler/24') }}"> Spike </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                    Top Ladder
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="ladder"> Mondial </a>
                        <a class="dropdown-item" href="ladderFr"> Français </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <h1>@yield('titreItem')</h1>
</header>
@yield('contenu')

<footer class="footer">
    <p>BrawlStar Companion, un site modeste proposant quelques statistiques sur le jeu BrawlStar</p>
</footer>
{!! Html::script('lib/jquery/jquery-3.3.1.slim.min.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
{!! Html::script('lib/js/bootstrap.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')!!}
</body>
</html>