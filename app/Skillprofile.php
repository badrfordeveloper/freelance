<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillprofile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'skillprofiles';

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
    protected $fillable = ['categorie_id', 'profile_id'];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
    public function categorie()
    {
        return $this->belongsTo('App\Category');
    }
    
}
