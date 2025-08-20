<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
<<<<<<< HEAD
=======
use Illuminate\Auth\Events\Registered;
 
>>>>>>> c17c6a8 (create new post tk)

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('country', 'tags', 'role')->get();
        return view('users.index', compact('users'));
    }

 public function register(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:6',
    ]);

    // Slug generate with duplicate check
    $slug = Str::slug($data['name']);
    $count = User::where('slug', 'LIKE', "{$slug}%")->count();
    if ($count > 0) {
        $slug .= '-' . ($count + 1);
    }
    $data['slug'] = $slug;

    // Password hash
    $data['password'] = Hash::make($data['password']);
    
    // Default values for role & country
    $data['role_id'] = 2; 
    $data['country_id'] = 1; 

    $user = User::create($data);

    if ($user) {
<<<<<<< HEAD
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
=======
        // ✅ Auto login user after registration
        event(new Registered($user));
        Auth::login($user);

        // ✅ Redirect directly to all posts page
        return redirect()->route('verification.notice');
>>>>>>> c17c6a8 (create new post tk)
    }

    return back()->withErrors(['error' => 'Something went wrong.']);
}

<<<<<<< HEAD
=======

>>>>>>> c17c6a8 (create new post tk)
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
<<<<<<< HEAD
            return redirect()->route('posts.index');
=======
            return redirect()->intended('posts');
>>>>>>> c17c6a8 (create new post tk)
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function dashboardPage()
    {
<<<<<<< HEAD
        return redirect()->route('login');
=======
        return redirect()->intended('login');
>>>>>>> c17c6a8 (create new post tk)
    }
    public function logout()
    {
        Auth::logout();
<<<<<<< HEAD
        return redirect()->route('login')->with('success', 'Logged out successfully.');
=======
        return redirect()->intended('login')->with('success', 'Logged out successfully.');
>>>>>>> c17c6a8 (create new post tk)
    }

public function show(User $user)
{
    return view('users.show', compact('user'));
}
}