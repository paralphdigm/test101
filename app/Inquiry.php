<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
  public $table = "inquiry";
  public $fillable = ['name',
                    'email',
                    'celnumber',
                    'telnumber',
                    'message',
                    'status',
          ];
}
