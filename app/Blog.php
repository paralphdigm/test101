<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  public $table = "blogs";
  public $fillable = ['blogname',
                    'blogdescription',
                    'ClientPic',
          ];
}
