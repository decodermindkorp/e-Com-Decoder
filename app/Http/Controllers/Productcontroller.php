<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Illuminate\Support\Facades\DB;
use Session;

class Productcontroller extends Controller
{
    //
    function index()
    {
        $data = product::all();
        return view('productview', ['products' => $data]);
    }

    function detail($id)
    {
        $data = product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        // return $req->input();
        $data = product::where('name', 'like', '%' . $req->input('search-item') . '%')
            ->get();

        return view('search', ['product' => $data]);
    }
    function addtocart(Request $req)
    {

        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect("/");
        } else {
            return redirect('/login');
        }
    }

    function cartItem()
    {
        $userId = Session::get('user')['id'];
        return cart::where('user_id', $userId)->count();
    }

    function cartlist()
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')
            ->join('product', 'cart.product_id', 'product.id')
            ->select('product.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();


        return view('cart_list', ['product' => $data]);
    }

    function removecart($id)
    {
        cart::destroy($id);
        return redirect('/cartlist');
    }
}
