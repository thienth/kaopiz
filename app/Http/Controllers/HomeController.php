<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Facades\Auth;

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

	/**
	 * Lay ra chi tiet san pham dua vao id truyen len 
	 * @author ThienTH
	 * @date 12/01/2019
	 * @param $id - id cua san pham 
	 * @return 404 page | view chi tiet
	 * @update - TrongNN - 15/01/2019 - update tang view cho san pham
	 */
	public function detail($id){
		// kiem tra xem id co ton tai trong bang products hay khong
		$model = Product::find($id);

		if(!$model){
			return "404 notfound";
		}
		
		// tang view cua san pham len 1 don vi
		$model->views = ++$model->views;
		$model->save();

		// tra ve giao dien chi tiet san pham
		return view('detail', compact('model'));
	}

	public function cpLogin(){
		return view('admin.login');
	}

	public function logout(){
		Auth::logout();
		return redirect(route('home'));
	}

	public function cpPostLogin(Request $request){
		$remember = $request->has('remember');
		if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
			return redirect(route('dashboard'));
		}else{
			return view('admin.login')->with('msg', 'Sai tài khoản/mật khẩu');
		}
	}

	public function addCart(Request $request){
		$item = Product::find($request->id);
		if(!$item){
			return "404 notfound!";
		}
		
		// check xem co gio hang hay chua
		// chua co => tao moi
		$cart = session()->has('cart') == true ? session('cart') : [];
		// kiem tra san pham xem co trong gio hang hay chua
		$flag = -1;
		foreach($cart as $key => $val){
			if($val['id'] === $item->id){
				$flag = $key;
				break;
			}
		}
		// 1 - chua co => chuyen $item => mang | add quantity = 1
		if($flag === -1){
			// push item vao trong gio hang
			$item->quantity = 1;
			array_push($cart, $item->toArray());
		}else{ // 2 - da co trong gio hang => xac dinh index
			// cart[index][quantity]++
			$cart[$flag]['quantity']++;
		}

		session(['cart' => $cart]);
		
		return response()->json(['success' => true, 'data' => $cart]);
	}
}
