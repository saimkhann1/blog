<?php

<<<<<<< HEAD
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller {
    public function index() {
        if ( Gate::denies( 'view-posts' ) ) {
            return redirect()->route( 'login' )->with( 'error', 'Please login to view posts.' );
        }
        $posts = Post::with( [ 'user', 'country', 'tags' ] )->paginate( 3 );
        return view( 'index', compact( 'posts' ) );
    }

    public function show( Post $post ) {
        return view( 'posts.show', compact( 'post' ) );
    }
}
=======
        namespace App\Http\Controllers;

        use App\Models\Post;
        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Gate;
        use App\Mail\PostCreatedMail;
        use Illuminate\Support\Facades\Mail;
        use App\Events\PostCreated;
        use Illuminate\Support\Facades\Auth;
        use App\Models\Country;
        use App\Models\Tag;
        use App\Models\User;
        use Illuminate\Support\Str;


        class PostController extends Controller
        {
            public function index()
            {
                if (Gate::denies('view-posts')) {
                    return redirect()->intended('login')->with('error', 'Please login to view posts.');
                }

                $posts = Post::with(['user', 'country', 'tags'])->latest()->paginate(3);
                return view('index', compact('posts'));
            }

           public function show(Post $post)
{
    // Change 'update' to 'view' to check for the 'view' gate
    Gate::authorize('view-posts', $post); 

    return view('posts.show', compact('post'));
}

            /**
             * Show form for editing the post
             */
        public function edit(Post $post)
        {
            Gate::authorize('update', $post);

            $countries = \App\Models\Country::all();
            $tags = \App\Models\Tag::all();
            $users = \App\Models\User::all();

            return view('posts.edit', compact('post', 'countries', 'tags', 'users'));
        }

        public function update(Request $request, Post $post)
        {
            Gate::authorize('update', $post);

            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'user_id' => 'required|exists:users,id',
                'slug' => 'required|string|max:255|unique:posts,slug,' . $post->id,
                'country_id' => 'required|exists:countries,id',
                'tags' => 'array|required',
                'tags.*' => 'exists:tags,id',
            ]);

            // Update post
            $post->update([
                'title' => $validated['title'],
                'slug' => $validated['slug'],
                'user_id' => $validated['user_id'],
                'country_id' => $validated['country_id'],
            ]);

            // Sync tags
            $post->tags()->sync($validated['tags']);

            return redirect()->route('posts.show', $post->slug)->with('success', 'Post updated successfully!');
        }

        // Other methods...

        // This is the create method that shows the form for creating a post
        public function create()
        {
            // Fetch users, countries, and tags to populate the form
            $user = Auth::user();
            $countries = Country::all();
            $tags = Tag::all();

            // Return the view to create a new post and pass the data
            return view('posts.create', compact('user', 'countries', 'tags'));
        }



   public function store(Request $request)
{
    // Validate the form input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'country_id' => 'required|exists:countries,id', // Ensure the country exists
        'tags' => 'array|required', // Ensure tags are selected
        'tags.*' => 'exists:tags,id', // Ensure each tag exists
    ]);

    // Get the currently logged-in user ID
    $userId = Auth::id();  // This will get the logged-in user's ID

    // Create the post
    $post = Post::create([
        'title' => $validated['title'],
        'content' => $validated['content'],
        'user_id' => $userId,  // Assign the logged-in user as the post author
        'country_id' => $validated['country_id'],  // Assign the selected country
    ]);
    

    // Sync tags with the post
    $post->tags()->sync($validated['tags']);

    // Trigger the event (optional for email, etc.)
    event(new PostCreated($post));

    // Redirect back with a success message
    return redirect()->route('posts.index')->with('success', 'Post created successfully!');
}


            public function destroy(Post $post)
            {
                Gate::authorize('delete', $post);

                $post->delete();

                return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
            }
        }
>>>>>>> c17c6a8 (create new post tk)
