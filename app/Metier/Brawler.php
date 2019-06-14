<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class Brawler extends Model
{
    //
    private $idBrawler;
    private $nomBrawler;
    private $rareteBrawler;
    private $descBrawler;
    private $vieBrawler;
    private $degatBrawler;
    private $degatsuperBrawler;
    private $starpowerBrawler;
    private $descstarPower;

    public function getIdBrawler()
    {
        return $this->idBrawler;
    }

    public function getNomBrawler()
    {
        return $this->nomBrawler;
    }

    public function getRareteBrawler()
    {
        return $this->rareteBrawler;
    }

    public function getDescBrawler()
    {
        return $this->descBrawler;
    }

    public function getVieBrawler()
    {
        return $this->vieBrawler;
    }

    public function getDegatBrawler()
    {
        return $this->degatBrawler;
    }

    public function getDegatSuperBrawler()
    {
        return $this->degatsuperBrawler;
    }

    public function getStarPowerBrawler()
    {
        return $this->starpowerBrawler;
    }

    public function getDescStarPower()
    {
        return $this->descstarPower;
    }

    public function setIdBrawler($id)
    {
        $this->idBrawler = $id;
    }

    public function setNomBrawler($nom)
    {
        $this->nomBrawler = $nom;
    }

    public function setDescBrawler($desc)
    {
        $this->descBrawler = $desc;
    }

    public function setVieBrawler($vie)
    {
        $this->vieBrawler = $vie;
    }

    public function setDegatBrawler($degat)
    {
        $this->degatBrawler = $degat;
    }

    public function setDegatSuperBrawler($degats)
    {
        $this->degatsuperBrawler = $degats;
    }

    public function setStarPowerBrawler($psb)
    {
        $this->starpowerBrawler = $psb;
    }

    public function setDescStarPower($descs)
    {
        $this->descstarPower = $descs;
    }

    public function setRareteBrawler($rare)
    {
        $this->rareteBrawler = $rare;
    }
}
