<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{       use Notifiable;

    public $table='product';

    protected $fillable = ['SizeandSpecifications', 'Trademark','Packing','Name'];

public function Productpics()
{
return $this->belongsTo('App/Productpics');
}


}
