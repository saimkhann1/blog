<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthorController extends Controller
{
    public function authorPosts(User $user)
    {
        $posts = $user->posts()->with('tags')->paginate(3);
        return view('by-author', compact('user', 'posts'));
    }
}
