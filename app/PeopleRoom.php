<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleRoom extends Model
{
    protected $table = "peoplerooms";
    protected $fillable = [
        'room_id','people_id'
    ];
    public $timestamps = true;
}
