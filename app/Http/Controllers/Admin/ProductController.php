<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\ProductGallery;

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

    public function add(){
        $model = new Product();
        $cates = Category::all();

        return view('admin.product.add', compact('model', 'cates'));
    }
    public function postAdd(Request $request){
        $model = new Product();
        // gan thuoc tinh su dung $fillable trong model
        $model->fill($request->all());

        // luu anh
        if($request->hasFile('image')){
            // dat ten cho anh
            $filename = uniqid(). "." . $request->image->extension();
            // luu anh voi ten vua tao ra
            $path = $request->image->storeAs('images/products', $filename);
            $model->image = $path;
        }

        $model->save();
        // dd($request->galleries);
        foreach($request->galleries as $gl){
            $galleryItem = new ProductGallery();
            $galleryItem->product_id = $model->id;

            // luu anh
            $filename = uniqid(). "." . $gl->extension();
            $path = $gl->storeAs('images/galleries/pro_' . $model->id, $filename);
            $galleryItem->img_url = $path;
            $galleryItem->save();
        }

        return redirect(route('product.list'));
        

    }
}
