<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Prestasi_Ukm extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detail__prestasi__ukms';

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
    protected $fillable = ['id_restasi', 'dpJuara', 'dpMedali'];

    public function prestasi(){
        return $this->belongsToMany('App\Prestasi');
    }

}
