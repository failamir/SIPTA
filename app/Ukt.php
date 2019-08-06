<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukt extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ukts';

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
    protected $fillable = ['uktKode', 'uktPeriode', 'uktDeskripsi', 'uktTglDeskripsi', 'uktStatus'];

    
}
