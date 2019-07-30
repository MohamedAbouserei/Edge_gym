<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $table='reservation';
    protected $fillable = ['user_id', 'program_id'];
    public function User()
    {
    return $this->belongsToMany('App/User');
    }

}
