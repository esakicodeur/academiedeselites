<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        return view('admin.comments.index', [
            'comments' => Comment::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return to_route('admin.comment.index')->with('success', 'Le commentaire a bien été supprimé.');
    }
}
