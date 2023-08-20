<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\Product;

class MakeController extends Controller
{
    public function index(): View
    {
        return view('home.make');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required",
            "description" => "required"
        ]);
        Product::create($request->only(["name","description","price"]));

        return redirect()->back()->with('success', 'Producto añadido con éxito!');
    }
}
