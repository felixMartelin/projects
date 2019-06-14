<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;
use App\Metier\Joueur;
use DB;

class JoueurDAO extends Model
{
    //
    public function getLesJoueur()
    {
        $Joueurs= DB::table('Joueur')->OrderBy('RangJoueur')->get();
        $LesJoueurs=array();

        foreach($Joueurs as $joueur)
        {
            $idJoueur=$joueur->IdJoueur;
            $LesJoueurs[$idJoueur]=$this->creerObjetMetier($joueur);
        }

        return $LesJoueurs;
    }

    public function getLesJoueurFrancais()
    {
        $Joueurs= DB::table('Joueur')->where('NationaliteJoueur','France')->OrderBy('RangJoueur')->get();
        $LesJoueurs=array();

        foreach($Joueurs as $joueur)
        {
            $idJoueur=$joueur->IdJoueur;
            $LesJoueurs[$idJoueur]=$this->creerObjetMetier($joueur);
        }

        return $LesJoueurs;
    }


    public function creerObjetMetier(\stdClass $unJoueur)
    {
        $leJoueur = new Joueur();
        $leJoueur->setIdJoueur($unJoueur->IdJoueur);
        $leJoueur->setNomJoueur($unJoueur->NomJoueur);
        $leJoueur->setTropheeMaxJoueur($unJoueur->TropheeMaxJoueur);
        $leJoueur->setTropheeJoueur($unJoueur->TropheeJoueur);
        $leJoueur->setRangJoueur($unJoueur->RangJoueur);

        return $leJoueur;
    }
}
