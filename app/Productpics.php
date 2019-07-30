<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productpics extends Model
{
  public $timestamps = false;
  public $table='product_pics';
  protected $fillable = ['product_id', 'pic'];

  public function Product()
{
return $this->belongsToMany('App/Product');
}


}
