<?php

namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user1s = User1::paginate(10);
        return view('user1s.index', compact('user1s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user1s.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required|email',
                'hashed_password' => 'required|min:6',
                'role' => 'required|in:admin,user,moderator',
            ]
        );
        User1::create($request->all());
        return redirect()->route('user1s.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User1 $user1)
    {
        //hàm compact() là 1 hàm php tích hợp
        //hàm compact('user') sẽ tạo ra 1 mảng với key là 'user' và value là biến $user
        return view(
            'user1s.show',
            compact('user1'),
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User1 $user1)
    {
        return view('user1s.edit', compact('user1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User1 $user1)
    {
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required|email',
                'hashed_password' => 'required|min:6',
                'role' => 'required|in:admin,user,moderator',
            ]
        );
        $user1->update($request->all());
        return redirect()->route('user1s.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User1 $user1)
    {
        $user1->delete();
        return redirect()->route('user1s.index')->with('success', 'User deleted successfully.');
    }
}
