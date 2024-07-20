<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPostsRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(SearchPostsRequest $request) {
        $query = Post::with('tags', 'category')->orderBy('created_at', 'desc');
        if ($request->has('title')) {
            $query = $query->where('title', 'like', "%{$request->input('title')}%");
        }

        return view('pages.blog', [
            'posts' => $query->paginate(4),
            'input' => $request->validated(),
            'categories' => Category::select('id', 'name')->get(),
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

    public function byCategory(string $slug, Category $category) {
        $query = Post::where('posts.category_id', '=', $category->id)->orderBy('created_at', 'desc');
        $expectedSlug = $category->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('blog.show', ['slug' => $expectedSlug, 'category' => $category]);
        }

        return view('pages.blog', [
            'posts' => $query->paginate(4),
            'categories' => Category::select('id', 'name')->get()
        ]);
    }

    public function byTag(string $slug, Tag $tag) {
        $query = Post::query()
            ->join('post_tag', 'posts.id', '=', 'post_tag.post_id')
            ->where('post_tag.tag_id', '=', $tag->id)
            ->orderBy('created_at', 'desc');

        $expectedSlug = $tag->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('blog.show', ['slug' => $expectedSlug, 'tag' => $tag]);
        }

        return view('pages.blog', [
            'posts' => $query->paginate(4),
            'categories' => Category::select('id', 'name')->get()
        ]);
    }

}
