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