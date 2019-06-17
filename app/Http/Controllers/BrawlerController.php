<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\BrawlerDAO;

class BrawlerController extends Controller
{
    //
    public function getBrawler()
    {
        $brawler = new BrawlerDAO();
        $lesbrawlers = $brawler->getLesBrawlers();
        return view('brawlers', compact('lesbrawlers'));
    }

    public function getUnBrawler($id)
    {
        $brawler =new BrawlerDAO();
        switch($id)
        {
            case 1 :
                $lebrawler=$brawler->getShelly();
                break;
            case 2 :
                $lebrawler=$brawler->getColt();
                break;
            case 3 :
                $lebrawler=$brawler->getJessie();
                break;
            case 4 :
                $lebrawler=$brawler->getNita();
                break;
            case 5 :
                $lebrawler=$brawler->getBull();
                break;
            case 6 :
                $lebrawler=$brawler->getBrock();
                break;
            case 7 :
                $lebrawler=$brawler->getDynamike();
                break;
            case 8 :
                $lebrawler=$brawler->getBo();
                break;
            case 9 :
                $lebrawler=$brawler->getCosto();
                break;
            case 10 :
                $lebrawler=$brawler->getBartaba();
                break;
            case 11 :
                $lebrawler=$brawler->getRosa();
                break;
            case 12 :
                $lebrawler=$brawler->getPoco();
                break;
            case 13 :
                $lebrawler=$brawler->getPenny();
                break;
            case 14 :
                $lebrawler=$brawler->getRicochet();
                break;
            case 15 :
                $lebrawler=$brawler->getDarryl();
                break;
            case 16 :
                $lebrawler=$brawler->getCarl();
                break;
            case 17 :
                $lebrawler=$brawler->getPolly();
                break;
            case 18 :
                $lebrawler=$brawler->getPam();
                break;
            case 19 :
                $lebrawler=$brawler->getFrank();
                break;
            case 20 :
                $lebrawler=$brawler->getBillie();
                break;
            case 21 :
                $lebrawler=$brawler->getMortis();
                break;
            case 22 :
                $lebrawler=$brawler->getTara();
                break;
            case 23 :
                $lebrawler=$brawler->getDjinn();
                break;
            case 24 :
                $lebrawler=$brawler->getSpike();
                break;
            case 25 :
                $lebrawler=$brawler->getCorbac();
                break;
            case 26 :
                $lebrawler=$brawler->getLeon();
                break;
            default:
                $lebrawler=$brawler->getShelly();
                break;
        }

        return view('brawler' , compact('lebrawler'))->with('id' , $id);
    }
}
