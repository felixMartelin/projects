<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    //
    private $idJoueur;
    private $nomJoueur;
    private $tropheemaxJoueur;
    private $tropheeJoueur;
    private $rangJoueur;

    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    public function getNomJoueur()
    {
        return $this->nomJoueur;
    }

    public function getTropheeMaxJoueur()
    {
        return $this->tropheemaxJoueur;
    }

    public function getTropheeJoueur()
    {
        return $this->tropheeJoueur;
    }

    public function getRangJoueur()
    {
        return $this->rangJoueur;
    }

    public function setIdJoueur($id)
    {
        $this->idJoueur = $id;
    }

    public function setNomJoueur($nom)
    {
        $this->nomJoueur = $nom;
    }

    public function setTropheeMaxJoueur($trM)
    {
        $this->tropheemaxJoueur = $trM;
    }

    public function setTropheeJoueur($trJ)
    {
        $this->tropheeJoueur = $trJ;
    }

    public function setRangJoueur($rang)
    {
        $this->rangJoueur = $rang;
    }
}
