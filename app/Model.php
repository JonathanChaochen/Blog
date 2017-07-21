<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
  // whitelist whitelist fields using the model’s $fillable property
  // protected $fillable = ['title', 'body'];

  //blacklist fields that aren’t fillable
  protected $guarded = [];

}
