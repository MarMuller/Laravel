<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
  protected $guarded = [];

  public function movies() {
    return $this->hasMany(Movies::class, 'id','genre_id');
  }
}
