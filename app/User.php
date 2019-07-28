<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','country_id', 'game_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*Relacion entre usuarios y paises
    * un usuario pertenece a un pais
    */

    public function countries(){
      return $this->belongsTo(Country::class);
  }
    public function post(){
    return $this->hasMany(Post::class);
  }
  public function publications(){
    return $this->hasMany(Publication::class);
}
//   public function profile(){
//     return $this->hasOne(Profile::class);
// }
  public function games(){
    return $this->hasOne(Game::class);
  }
  public function hearts(){
    // return $this->belongsToMany(Post::class, 'hearts', 'user_id', 'post_id');
    return $this->hasMany(Heart::class);
  }
}
