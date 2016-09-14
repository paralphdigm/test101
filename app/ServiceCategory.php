<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
  public $table = "servicecategories";
  public $fillable = ['name',
                    'description',
          ];
}
