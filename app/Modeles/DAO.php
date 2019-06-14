<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class DAO extends Model
{
    //
    protected abstract function creerObjetMetier(\stdClass $objet);
}
