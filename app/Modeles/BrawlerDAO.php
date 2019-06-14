<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;
use App\Metier\Brawler;
use DB;

class BrawlerDAO extends Model
{
    //
    public function getLesBrawlers()
    {
        $Brawlers= DB::table('Brawler')->get();
        $LesBrawlers=array();

        foreach($Brawlers as $brawler)
        {
            $idBrawler=$brawler->IdBrawler;
            $LesBrawlers[$idBrawler]=$this->creerObjetMetier($brawler);
        }

        return $LesBrawlers;
    }

    public function getNita()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Nita')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getRosa()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Rosa')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getColt()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Colt')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getShelly()
    {
        $Brawlers = DB::table('Brawler')->where('NomBrawler', 'Shelly')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
            {
                $LeBrawler[0] = $this->creerObjetMetier($brawler);
            }
        return $LeBrawler;
    }

    public function getJessy()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Jessy')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getPenny()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Penny')->get();
        $Brawler = $this->creerObjetMetier($Brawlers);
        return $Brawler;
    }

    public function getBull()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Bull')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getCosto()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'El Costo')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getLeon()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Leon')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getFrank()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Frank')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getBrock()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Brock')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getPolly()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Polly')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getPam()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Pam')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getSpike()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Spike')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getDynamike()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Dynamike')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getBillie()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Billie')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getMortis()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Mortis')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getDjinn()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Djinn')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getTara()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Tara')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getDarryl()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Darryl')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getRicochet()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Ricochet')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getCarl()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Carl')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getBo()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Bo')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getPoco()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Poco')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getBartaba()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Bartaba')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function getCorbac()
    {
        $Brawlers= DB::table('Brawler')->where('NomBrawler' , 'Corbac')->get();
        $LeBrawler = array();
        foreach ($Brawlers as $brawler)
        {
            $LeBrawler[0] = $this->creerObjetMetier($brawler);
        }
        return $LeBrawler;
    }

    public function creerObjetMetier(\stdClass $unBrawler)
    {
        $leBrawler = new Brawler();
        $leBrawler->setIdBrawler($unBrawler->IdBrawler);
        $leBrawler->setNomBrawler($unBrawler->NomBrawler);
        $leBrawler->setRareteBrawler($unBrawler->RareteBrawler);
        $leBrawler->setDescBrawler($unBrawler->DescBrawler);
        $leBrawler->setVieBrawler($unBrawler->VieBrawler);
        $leBrawler->setDegatBrawler($unBrawler->DegatBrawler);
        $leBrawler->setDegatSuperBrawler($unBrawler->DegatSuperBrawler);
        $leBrawler->setStarPowerBrawler($unBrawler->StarPowerBrawler);
        $leBrawler->setDescStarPower($unBrawler->DescStarPower);

        return $leBrawler;
    }

    public function getUnBrawler($id)
    {
        $Brawlers= DB::table('Brawler')->get();

        foreach($Brawlers as $brawler)
        {
            $idBrawler=$brawler->IdBrawler;
            if($idBrawler==$id)
            {
                return $this->creerObjetMetier($brawler);
            }
        }
    }
}
