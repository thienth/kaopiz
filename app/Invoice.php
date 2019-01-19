<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';

    public function products(){
        return $this->belongsToMany('App\Product', 'invoice_detail', 'invoice_id', 'product_id');
    }
}
