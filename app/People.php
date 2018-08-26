<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = "peoples";
    protected $fillable = [
        'firstname','lastname','gender','age','school','grade','job','n_children'
    ];
    public $timestamps = true;
}
