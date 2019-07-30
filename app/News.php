<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class News extends Model
{
  public $table='news';
  protected $fillable = ['news', 'duration'];
  use Notifiable;


}
