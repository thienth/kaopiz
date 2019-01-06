<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Contracts\Support\Jsonable;

class HomeController extends Controller
{
	public function index(){
		$menus = Category::take(4)->get();
		$products = Product::take(12)->get();
		// return view('homepage', compact('products', 'menus'));
		return view('test-layout');
	}

	public function listProducts($cateId){
		return view('test-layout2');
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
}
