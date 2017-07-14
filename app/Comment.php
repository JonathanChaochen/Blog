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
}
