<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(1);

        return view('users.index')->with([
            'users' => $users
        ]);
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
            'avatar' => ['nullable', 'file', 'mimes:jpeg,jpg,png', 'max:2048'],
            'user_role' => ['required', 'string', 'in:admin,user,finance'],
        ]);

        if ($validatedData) {

            $user = new User();

            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $filename = Str::lower(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . uniqid() . '.' . $image->getClientOriginalExtension());
                $destination = 'images/users';
                $image->storeAs($destination, $filename, 'local');
                $user->avatar = $filename;
            } else {
                $user->avatar = 'images/users/default-avatar.png'; // Replace with the name of your default avatar image
            }

            $user->first_name = $validatedData['first_name'];
            $user->last_name = $validatedData['last_name'];
            $user->email = $validatedData['email'];
            $user->phone_no = $validatedData['phone_no'];
            $user->password = Hash::make($validatedData['password']);

            $user->user_role = $validatedData['user_role'];
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
        $user = User::find($id);
        return view('users.edit')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'phone_no' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8'],
            'avatar' => ['nullable', 'file', 'mimes:jpeg,jpg,png', 'max:2048'],
            'user_role' => ['required', 'string', 'in:admin,user,finance'],
        ]);

        if ($validatedData) {
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $filename = Str::lower(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . uniqid() . '.' . $image->getClientOriginalExtension());
                $destination = 'images/users';
                $image->storeAs($destination, $filename, 'local');
                if ($user->avatar !== 'images/users/default-avatar.png') {
                    Storage::delete($user->avatar); // Delete old image
                }
                $user->avatar = $filename;
            }

            $user->first_name = $validatedData['first_name'];
            $user->last_name = $validatedData['last_name'];
            $user->email = $validatedData['email'];
            $user->phone_no = $validatedData['phone_no'];
            $user->password = Hash::make($validatedData['password']);
            $user->user_role = $validatedData['user_role'];
            $user->save();

            return redirect('/users')->with('success', 'User updated successfully.');
        } else {
            return redirect()->back()->withErrors("All fields are required")->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('users')->with("success", "Item has been deleted");
    }
}
