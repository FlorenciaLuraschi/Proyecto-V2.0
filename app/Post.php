<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';
  protected $fillable = ['description', 'user_id'];

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
  public function hearts(){
    // return $this->belongsToMany(User::class, 'hearts');
    return $this->hasMany(Heart::class);
  }
}
