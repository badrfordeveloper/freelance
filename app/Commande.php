<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commandes';

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
    protected $fillable = ['description', 'status', 'projet_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function projet()
    {
        return $this->belongsTo('App\Projet');
    }
    
}
