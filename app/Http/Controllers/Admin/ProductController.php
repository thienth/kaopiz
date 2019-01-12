<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        if($request->keyword){
            $products = Product::where('name', 'like', "%$request->keyword%")
                                ->paginate(20);
            $products->setPath(route('dashboard'));
            $products->withPath('?keyword=' . $request->keyword);
        }else{
            $products = Product::paginate(20);
        }
        
        return view('admin.product.index', compact('products', 'keyword'));
    }

    public function remove($id){
        $model = Product::find($id);
        $model->delete();
        return redirect(route('product.list'));
    }
}
