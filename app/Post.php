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
}
