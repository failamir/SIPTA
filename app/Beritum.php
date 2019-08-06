<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beritum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'beritas';

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
    protected $fillable = ['beritaJudul', 'beritaTgl', 'beritaIsi'];

    
}
