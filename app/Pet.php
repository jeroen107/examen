<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /**
     * hier staat de relatie dat een huisdier bij 1 klant hoort
     */

    public function Owner(){
       return $this->belongsTo('App\Customer', 'owner_id', 'id', 'Customer');
    }
}
