<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    public function index() {
        $posts = Auth::user()->favorite_posts;

        return view('admin.favorites.index', [
            'posts' => $posts
        ]);
    }
}
