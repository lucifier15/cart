<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\product;
use App\cart;
use Session;

class ProductController extends Controller
{
    public function index(){
       
       $products=product::all();
       return view('shop.index',['product'=>$products]);
    }

    public function getAddToCart(Request $request, $id){
        $product=product::find($id);
        $cart=Session::has('cart') ?Session::get('cart'):null;
        if(!$cart)
        {
        	$cart=new cart($cart);
        }
        $id=$product->id;
        $cart->add($product, $product->id);
        
        $request->session()->put('cart',$cart);
        return redirect()->route('product.index');
    }

    public function getCart(){
    	if(!Session::has('cart')){
           return view('shop.shopping-cart');
    	}
    	$cart=Session::get('cart');
    	return view('shop.shopping-cart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
