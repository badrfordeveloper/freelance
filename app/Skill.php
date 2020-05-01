<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'skills';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['libelle', 'categorie_id'];

    public function categorie()
    {
        return $this->belongsTo('App\Category');
    }

    public function projets()
    {
        return $this->belongsToMany('App\Projet');
    }
    
}
