<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_no' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'avatar' => ['nullable', 'image', 'max:2048'],
            'user_role' => ['required', 'string', 'in:admin,user,finance'],
        ]);

        if ($validatedData) {

            $user = new User();

            $user->first_name = $validatedData['first_name'];
            $user->last_name = $validatedData['last_name'];
            $user->username = $validatedData['email'];
            $user->username = $validatedData['phone_no'];
            $user->password = Hash::make($validatedData['password']);
            $user->avatar = $validatedData['avtar'] ? $validatedData['avtar'] : asset('images/default-avatar.jpg');
            $user->username = $validatedData['user_role'];
            $user->save();

            return redirect('/users')->with('success', 'User added successfully.');
        } else {
            return redirect()->back()->withErrors("All fields are required")->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('users.show')->with(['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
