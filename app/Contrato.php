<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //Primary key
    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
