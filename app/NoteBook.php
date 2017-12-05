<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notebook extends Model
{
    //
    public $table='notebooks';
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
