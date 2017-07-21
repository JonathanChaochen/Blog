<?php

namespace App;

// Use own Model not Eloquent model
// Use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // protected $fillable = ['title', 'body'];

  public function comments()
  {
    return $this->hasMany(Comment::class);
    // return $this->hasMany('App\Comment');
  }

  public function user() //$post->user
  {
    return $this->belongsTo(User::class);
  }

  public function addComment($body)
  {
    // add comment to a post
    // Comment::create([
    //   'body' => $body,
    //   'post_id' => $this->id
    //   ]);
    $this->comments()->create(compact('body'));
  }

}
