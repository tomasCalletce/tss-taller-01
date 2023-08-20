<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Product;

class ExploreController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData["products"] = Product::all();
        return view('home.explore')->with("viewData", $viewData);
    }

    public function show(string $id) : View
    {
        $viewData = [];
        $viewData["product"] = Product::findOrFail($id);
        return view('home.show')->with("viewData", $viewData);
    }
  }