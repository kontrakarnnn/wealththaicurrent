<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_type';


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
