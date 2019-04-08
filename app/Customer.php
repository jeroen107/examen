<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function Pets(){
       return $this->hasMany('App\Pet', 'owner_id', 'id');
    }
}
