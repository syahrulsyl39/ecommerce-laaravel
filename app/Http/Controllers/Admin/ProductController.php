<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('backend.product.plus');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_code' => 'required|string',
            'category' => 'required|string',
            'product_name' => 'required|string',
            'description' => 'required|string',
            'stock' => 'required|string',
            'price' => 'required|string'
        ]);
        Product::create([
            "product_code" => $request->input('product_code'),
            "category" => $request->input('category'),
            "product_name" => $request->input('product_name'),
            "description" => $request->input('description'),
            "stock" => $request->input('stock'),
            "price" => $request->input('price'),
        ]);
        return redirect()->route('show');
    }

    public function show()
    {
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }
}
