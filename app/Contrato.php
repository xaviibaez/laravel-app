<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //Mapea la bbdd
    //Primary key
    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User' , 'id_cliente');
    }
}
