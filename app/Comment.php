<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  // $comments->post;
  public function post()
  {
    return $this->belongsTo(Post::class);
  }

  // $comments->user;
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
