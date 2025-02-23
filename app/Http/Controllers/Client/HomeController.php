<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $categories = Category::with(['products' => function ($query) {
            $query->where('status', 'active'); 
        }])->where('status', 'active') 
        ->get();
        return view('client.index',compact('categories'));
    }
   
}
