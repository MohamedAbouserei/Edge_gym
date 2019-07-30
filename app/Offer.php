<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
public $table ='offer';
protected $fillable = ['offer','discount'];

}
