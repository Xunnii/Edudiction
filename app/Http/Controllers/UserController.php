<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $pagedata['dataUser'] = User::simplePaginate(5); //function all mewakili * from untuk tampilin semua data
        return view('admin.user.index', $pagedata);
    }


    public function create()
    {
        return view('admin.user.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
            'role' => ['required'],
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['role'] = $request->role;

        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('user.list')->with('success', 'Penambahan Data Berhasil!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $param1)
    {
        $data['dataUser'] = User::findOrFail($param1);
        return view('admin.user.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
            'role' => ['required'],

        ]);

        $id = $request->id;
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        $user->save();

        return redirect()->route('user.list')->with('success', 'Perubahan Data Berhasil!');
    }

    public function destroy(string $param1)
    {
        $user = User::findOrFail($param1);

        $user->delete();

        return redirect()->route('user.list')->with('success','Penghapusan Data Berhasil!');

    }
}
