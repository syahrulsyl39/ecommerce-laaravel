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

    public function edit($id)
    {
        $categories = Category::where('id', $id)->first();

        return view('backend.categori.update', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        $categories = Category::where('id', $id)->first();

        $categories->update([
            "name" => $request->input('name'),
        ]);

        return redirect()->route('show-c');
    }

    public function destroy($id)
    {
        $categories = Category::where('id', $id)->first();

        $categories->delete();

        return redirect()->route('show-c');
    }
}
