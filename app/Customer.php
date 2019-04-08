<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * hier staat de relatie dat een klant 1 of meerdere huisdieren kan hebben
     */

    public function Pets(){
       return $this->hasMany('App\Pet', 'owner_id', 'id');
    }
}
