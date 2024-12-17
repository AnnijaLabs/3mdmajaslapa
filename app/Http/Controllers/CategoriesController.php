<?php

namespace App\Http\Controllers;
use App\Models\Category; // Importējiet Category modeli kontrolierī

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }
}
