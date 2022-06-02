<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     * Relationship for event to workshops
     */
    public function workshops(){
        return $this->hasMany('App\Models\Workshop', 'event_id', 'id');
    }
}
