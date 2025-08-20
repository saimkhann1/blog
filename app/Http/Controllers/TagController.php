<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function tagPosts(Tag $tag)
    {
        $posts = $tag->posts()->with('user', 'tags')->paginate(5); //fix
        return view('by-tag', compact('posts', 'tag'));
    }
}
