<?php

namespace App\Http\Controllers;

use App\Modeles\BrawlerDAO;
use Illuminate\Http\Request;
use App\Modeles\JoueurDAO;
use App\Modeles\BrawlerJoueurDAO;

class JoueurController extends Controller
{
    //
    public function getJoueurs()
    {
        $joueur = new JoueurDAO();
        $lesjoueurs = $joueur->getLesJoueur();
        return view('ladder', compact('lesjoueurs'));
    }

    public function getJoueursFrancais()
    {
        $joueur = new JoueurDAO();
        $lesjoueurs = $joueur->getLesJoueurFrancais();
        return view('ladderFr', compact('lesjoueurs'));
    }

    public function getUnJoueur($id)
    {
        $joueur = new JoueurDAO();
        $brawler = new BrawlerJoueurDAO();
        $lejoueur = $joueur->getUnJoueur($id);
        $lesbrawlers = $brawler->getLesBrawlersJoueur($id);
        return view('joueur',compact('lejoueur' , 'lesbrawlers'))->with('id' , $id);
    }
}
