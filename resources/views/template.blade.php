<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
{!! Html::style('lib/bootstrap/bootstrap.min.css') !!}
{!! Html::style('css/basique.css') !!}
<title>@yield('titrePage')</title>
</head>
    <style>
        a {color : black}
        a:hover {color : #A22222}
    </style>
<body class="bg-light">
<nav class="navbar navbar-expand-lg static-top" style="background-color: #FFE25B; color: black ; width:100% ; height: 100% ; object-fit: cover">
    <div class="container">
        @yield('vignette')
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @yield('pageCourante')
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/accueil') }}">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        Les Brawlers
                    </a>
                    <div class="dropdown-menu ClassPersoScroll" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawlers') }}">@yield('puce') Tous les brawlers</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/4') }}">@yield('puce') Nita </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/3') }}">@yield('puce') Jessie </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/1') }}">@yield('puce') Shelly </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/2') }}">@yield('puce') Colt </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/5') }}">@yield('puce') Bull </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/6') }}">@yield('puce') Brock </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/7') }}">@yield('puce') Dynamike </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/8') }}">@yield('puce') Bô </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/9') }}">@yield('puce') El Costo</a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/10') }}">@yield('puce') Bartaba </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/12') }}">@yield('puce') Poco </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/13') }}">@yield('puce') Rosa </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/14') }}">@yield('puce') Ricochet </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/15') }}">@yield('puce') Darryl </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/13') }}">@yield('puce') Penny </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/16') }}">@yield('puce') Carl </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/17') }}">@yield('puce') Polly </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/18') }}">@yield('puce') Pam </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/19') }}">@yield('puce') Frank </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/20') }}">@yield('puce') Billie </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/22') }}">@yield('puce') Tara </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/23') }}">@yield('puce') D'jinn </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/21') }}">@yield('puce') Mortis </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/26') }}">@yield('puce') Léon </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/25') }}">@yield('puce') Corbac </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/brawler/24') }}">@yield('puce') Spike </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                    Top Ladder
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/ladder') }}">@yield('puce') Mondial </a>
                        <a class="dropdown-item list-group-item-action list-group-item-light" href="{{ url('/ladderFr') }}">@yield('puce') Français </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <h1 style="text-align: center">@yield('titreItem')</h1>
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