<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        $products = Product::all();
        $firstProducts = Product::where('kategori', 'kue ulang tahun')->get();
        $secondProducts = Product::where('kategori', 'kue bolu')->get();
        $thirdProducts = Product::where('kategori', 'roti dan donat')->get();
        return view('welcome',compact('products', 'firstProducts','secondProducts', 'thirdProducts'));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('detail',compact(['product']));
    }

    public function checkout($id){
        $product = Product::find($id);
        return view('checkout',compact('product'));
    }
}