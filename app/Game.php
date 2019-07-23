<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

  protected $fillable = ['score', 'user_id'];

  public function player()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
