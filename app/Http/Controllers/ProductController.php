<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Iegūst visus produktus ar kategoriju un detaļu informāciju
        $products = Product::with(['category', 'details'])->get();
        return view('products', compact('products'));
    }
    public function showDetail($id)
    {
        // Atrast produkta datus pēc ID
        $product = Product::findOrFail($id);
        // Atgriež skatu 'productdetails' ar konkrētā produkta datiem
        return view('productdetails', compact('product'));
    }

}
