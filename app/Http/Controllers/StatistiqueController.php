<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\region;
use App\Models\product;
use App\Models\User;


class StatistiqueController extends Controller
{
    public function dashboard(){
        $categories = Categorie::all();
        $products = Product::all();
        $regions = Region::all();
        $clients = User::where('role_id', 3)->count();
        $operators = User::where('role_id', 2)->count();
    
        $categoriesCount = $categories->count();
        $productsCount = $products->count();
        $regionsCount = $regions->count();
    
        return view('admin.dashboard', compact('categories', 'products', 'regions', 'clients', 'operators', 'categoriesCount', 'productsCount', 'regionsCount'));
    }
    
}
