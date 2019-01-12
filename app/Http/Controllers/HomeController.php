<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Contracts\Support\Jsonable;

class HomeController extends Controller
{
	public function index(){
		
		$products = Product::take(12)->get();
		return view('homepage', compact('products'));
	}

	public function listProducts($cateId){
		// find object by cate id
		$cate = Category::find($cateId);
		if($cate == null){
			return "not found!";
		}
		// get paginate of products belong to current cate
		$products = Product::where('cate_id', $cateId)->paginate(12);
		// return view with cate and list products
		return view('list-product', compact('cate', 'products'));
	}

	public function detail($id){
		// kiem tra xem id co ton tai trong bang products hay khong
		$model = Product::find($id);

		if(!$model){
			return "404 notfound";
		}
		
		// tang view cua san pham len 1 don vi
		$model->views = ++$model->view;
		$model->save();

		// tra ve giao dien chi tiet san pham
		return view('detail', compact('model'));
	}
}
