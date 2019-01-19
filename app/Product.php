<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'cate_id', 'price', 
                            'views', 'star', 'short_desc', 
                            'detail'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'cate_id', 'id');
    }

    public function galleries()
    {
        return $this->hasMany('App\ProductGallery', 'product_id', 'id');
    }
    public function invoices(){
        return $this->belongsToMany('App\Invoice', 'invoice_detail', 'product_id', 'invoice_id');
    }

    public function relates(){
        $relates = Product::where('cate_id', $this->cate_id)
                            ->where('id', '<>', $this->id)
                            ->orderBy('views', 'desc')
                            ->orderBy('id', 'desc')
                            ->take(4)
                            ->get();
        return $relates;
    }
}
