<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projets';

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
    protected $fillable = ['titre', 'description', 'image', 'prix', 'dateDebut', 'dateFin', 'etat', 'status', 'type', 'categorie_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function categorie()
    {
        return $this->belongsTo('App\Category');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }

    public function commandes()
    {
        return $this->hasMany('App\Commande');
    }
    
}
