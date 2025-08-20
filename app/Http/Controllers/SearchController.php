<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Posts search karo (active + deleted)
        $posts = Post::withTrashed()
            ->where('title', 'like', "%{$query}%")
            ->get();

        return view('search.results', compact('posts', 'query'));
    }
}
