<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillprojet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'skillprojets';

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
    protected $fillable = ['categorie_id', 'projet_id'];

    public function projet()
    {
        return $this->belongsTo('App\Projet');
    }
    public function categorie()
    {
        return $this->belongsTo('App\Category');
    }
    
}
