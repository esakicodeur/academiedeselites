<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPostsRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(SearchPostsRequest $request) {
        $query = Post::query();
        if ($request->has('title')) {
            $query = $query->where('title', 'like', "%{$request->input('title')}%");
        }

        return view('pages.blog', [
            'posts' => $query->paginate(6),
            'input' => $request->validated()
        ]);
    }

    public function show(string $slug, Post $post) {
        $expectedSlug = $post->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('blog.show', ['slug' => $expectedSlug, 'post' => $post]);
        }

        return view('post.show', [
            'post' => $post
        ]);
    }

}
