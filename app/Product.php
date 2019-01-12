<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function category()
    {
        return $this->belongsTo('App\Category', 'cate_id');
    }

    public function galleries()
    {
        return $this->hasMany('App\ProductGallery', 'product_id', 'id');
    }
}
