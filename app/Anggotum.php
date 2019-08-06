<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggotum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anggotas';

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
    protected $fillable = ['id_cabang', 'id_sabuk', 'id_dp', 'anggotaNama', 'anggotaNim', 'anggotaPassword', 'anggotaRiwayatPenyakit', 'anggotaTglLahir', 'anggotaHp', 'anggotaAngkatan', 'anggotaJK', 'anggotaJur', 'duStatus'];

    public function cabangs(){
        return $this->belongsToMany('App\Cabang');
    }
        public function sabuks(){
        return $this->belongsToMany('App\Sabuk');
    }
    public function daftar_kejuaraan(){
        return $this->belongsToMany('App\Daftar_Kejuaraan');
    }
    
}
