<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar_Kejuaraan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'daftar__kejuaraans';

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
    protected $fillable = ['id_kejuaraan', 'id_anggota', 'id_cabang', 'dkTinggiBadan', 'dkBeratBadan', 'duStatus'];

    public function kejuaraan(){
        return $this->belongsToMany('App\Kejuaraan');
    }

    public function anggota(){
        return $this->belongsToMany('App\Anggotum');
    }

    public function cabang(){
        return $this->belongsToMany('App\Cabang');
    }
    
}
