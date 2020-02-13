<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Post
 *
 * @mixin Builder
 */
class Creneau extends Model
{
    protected $table = 'creneau';
    protected $primaryKey = 'idcreneau';
    public $timestamps = false;

    function nouveauCreneau($jour, $semaine, $cycle, $heuredeb, $heurefin, $activation){
        $c = new Creneau();
        $c->jour = $jour;
        $c->semaine = $semaine;
        $c->cycle = $cycle;
        $c->heuredeb = $heuredeb;
        $c->heurefin = $heurefin;
        $c->activation = $activation;

        $c->save();
    }

    function listeCreneaux(){
        $c = Creneau::OrderBy('idcreneau', 'asc')->get();
        return $c;
    }
}
