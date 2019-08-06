<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'prestasis';

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
    protected $fillable = ['id_kejuaraan', 'prestasiTgl', 'prestasiTingkat', 'prestasiJmlMedali'];

    public function kejuaraan(){
        return $this->belongsToMany('App\Kejuaraan');
    }
}
