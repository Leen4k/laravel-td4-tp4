<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use App\Models\Products;
use App\Models\Promotion;

class HomeController extends Controller
{
    public function renderHome() {
        $categories = Category::all();
        $products = Products::all();
        $promotions = Promotion::all();
        return view('home', compact('categories', 'products', 'promotions'));
    }
}