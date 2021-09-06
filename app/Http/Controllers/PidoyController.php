<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PidoyController extends Controller
{

    public function index()
    {
        $users = User::get();

        return view('crud.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('crud.edit', compact('user'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function update($id, Request $request)
    {
        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect('/crud');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/crud');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->back();
    }
}
