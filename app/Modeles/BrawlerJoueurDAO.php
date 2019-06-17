<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;
use App\Metier\BrawlerJoueur;
use DB;

class BrawlerJoueurDAO extends Model
{
    public function getLesBrawlersJoueur($id)
    {
        $Brawlers= DB::table('BrawlerJoueur')->where('IdBrawlerJoueur',$id)->where('DebloquerBrawlerJoueur' , '1')->get();
        $LesBrawlers=array();

        foreach($Brawlers as $brawler)
        {
            $idBrawler=$brawler->IdJoueurBrawler;
            $LesBrawlers[$idBrawler]=$this->creerObjetMetier($brawler);
        }

        return $LesBrawlers;
    }

    public function creerObjetMetier(\stdClass $unBrawler)
    {
        $leBrawler = new BrawlerJoueur();
        $leBrawler->setIdJoueur($unBrawler->IdBrawlerJoueur);
        $leBrawler->setIdBrawler($unBrawler->IdJoueurBrawler);
        $leBrawler->setTropheeBrawler($unBrawler->TropheeBrawlerJoueur);
        $leBrawler->setNiveauBrawler($unBrawler->NiveauBrawlerJoueur);
        $leBrawler->setDebloquer($unBrawler->DebloquerBrawlerJoueur);

        return $leBrawler;
    }
}
