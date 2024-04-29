<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function dashboard() {
        // dump(Product::all());
        return view("dashboard", [
            "portfolios"=> Product::orderBy("created_at","desc")->paginate(3),
        ]);
    }
}
