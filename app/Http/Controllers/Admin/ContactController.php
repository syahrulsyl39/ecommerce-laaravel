<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('backend.contact.craete');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
        ]);

        Contact::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "message" => $request->input('message'),
        ]);

        return redirect()->route('show-contact');
    }

    public function show()
    {
        $contacts = Contact::all();

        return view('backend.contact.index', compact('contacts'));
    }

    public function edit($id)
    {
        $contacts = Contact::where('id', $id)->first();

        return view('backend.contact.update', compact('contacts'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
        ]);

        $contacts = Contact::where('id', $id)->first();

        Contact::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "message" => $request->input('message'),
        ]);

        return redirect()->route('show-contact');
    }

    public function destroy($id)
    {
        $contacts = Contact::where('id', $id)->first();

        $contacts->delete();

        return redirect()->route('show-contact');
    }
}
