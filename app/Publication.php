<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table ="publications";
    protected $fillable = ['body', 'user_id'];

    public function authorPublication()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
