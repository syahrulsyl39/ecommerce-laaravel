<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('backend.order.plus');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_code' => 'required|string',
            'category_id' => 'required|string',
            'product_name' => 'required|string',
            'description' => 'required|string',
            'order_quantity' => 'required|string',
            'price' => 'required|string',
            'order_date' => 'required|string',
        ]);

        Order::create([
            "product_code" => $request->input('product_code'),
            "category_id" => $request->input('category_id'),
            "product_name" => $request->input('product_name'),
            "description" => $request->input('description'),
            "order_quantity" => $request->input('order_quantity'),
            "price" => $request->input('price'),
            "order_date" => $request->input('order_date'),
        ]);

        return redirect('show');
    }

    public function show()
    {
        $orders = Order::all();
        return view('backend.order.index', compact('orders'));
    }
}
