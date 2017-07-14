<?php

namespace App;

//Use own Model not Eloquent model
// use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // protected $fillable = ['title', 'body'];

  public function comments()
  {
    return $this->hasMany(Comment::class);
    // return $this->hasMany('App\Comment');
  }
}
