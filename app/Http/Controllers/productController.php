<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Session;
class productController extends Controller
{
    //
    function index()
    {
        $data= product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data=Product::find($id);
     return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
         $data= product::
        where('name','like','%'.$req->
        input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
       if($req->session()->has('user'))
       {
        $cart= new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
        }
       else{
           return redirect('/login');
       }
    }
    static function cartItem()
    {
        $userID=Session::get('user')['id'];
        return Cart::where('user_id',$userID)->count();
    }
}
