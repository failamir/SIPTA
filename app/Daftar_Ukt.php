<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar_Ukt extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'daftar__ukts';

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
    protected $fillable = ['id_ukt', 'id_anggota', 'duSabukUjian', 'duStatus'];

    public function ukt(){
        return $this->belongsToMany('App\Ukt');
    }
    
    public function anggota(){
        return $this->belongsToMany('App\Anggotum');
    }
}
