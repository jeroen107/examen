<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function Owner(){
       return $this->belongsTo('App\Customer', 'owner_id', 'id', 'Customer');
    }
}
