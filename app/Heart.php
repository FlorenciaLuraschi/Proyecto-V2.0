<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heart extends Model
{
  public function user_hearts(){
    
    return $this->belongsTo(User::class);
  }
  public function post_hearts(){

    return $this->belongsTo(Post::class);
  }
}
