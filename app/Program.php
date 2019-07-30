<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public $table='program';

    protected $fillable = ['data', 'name','type','startdate','duration','price'];

}
