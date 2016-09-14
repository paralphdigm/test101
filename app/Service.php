<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  public $table = "services";
  public $fillable = ['servicecategory_id',
                    'name',
                    'description',
                    'price',
          ];
}
