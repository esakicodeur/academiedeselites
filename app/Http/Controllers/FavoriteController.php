<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function add($post) {
        $user = Auth::user();
        $isFavorite = $user->favorite_posts()->where('post_id', $post)->count();

        if ($isFavorite == 0) {
            $user->favorite_posts()->attach($post);

            flashy()->success('Vous venez de liker cet article :)');
            return redirect()->back();
        } else {
            $user->favorite_posts()->detach($post);

            flashy()->success('Vous venez de retirer votre like :)');
            return redirect()->back();
        }
    }
}
