<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('backend.categori.plus');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        Category::create([
            "name" => $request->input('name'),
        ]);

        return redirect()->route('show-c');
    }

    public function show()
    {
        $categories = Category::all();
        return view('backend.categori.index', compact('categories'));
    }
}
