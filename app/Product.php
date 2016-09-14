<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $table = "products";
  public $fillable = ['productcategory_id',
                    'name',
                    'description',
                    'price',
                    'ClientPic',
                    'availability',
                    'featured',
          ];
  public function productcategory()
  {
      return $this->belongsTo('App\ProductCategory');
  }
}
