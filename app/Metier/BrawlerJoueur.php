<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class BrawlerJoueur extends Model
{
    //
    private $idJoueur;
    private $idBrawler;
    private $tropheeBrawler;
    private $niveauBrawler;
    private $debloquer;

    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    public function getIdBrawler()
    {
        return $this->idBrawler;
    }

    public function getTropheeBrawler()
    {
        return $this->tropheeBrawler;
    }

    public function getNiveauBrawler()
    {
        return $this->niveauBrawler;
    }

    public function getDebloquer()
    {
        return $this->debloquer;
    }

    public function setIdJoueur($id)
    {
        $this->idJoueur = $id;
    }

    public function setIdBrawler($id)
    {
        $this->idBrawler = $id;
    }

    public function setTropheeBrawler($tr)
    {
        $this->tropheeBrawler = $tr;
    }

    public function setNiveauBrawler($n)
    {
        $this->niveauBrawler = $n;
    }

    public function setDebloquer($d)
    {
        $this->debloquer = $d;
    }
}
