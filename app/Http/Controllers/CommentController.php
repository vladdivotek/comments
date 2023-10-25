<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $comments = Comment::where('comment_id', null)->paginate(25);
        return view('index', ['comments' => $comments]);
    }

    public function store(Request $request)
    {
        $comment = Comment::create([
            'comment_id' => $request->comment_id,
            'name' => $request->name,
            'email' => $request->email,
            'link' => $request->link ?? '',
            'text' => $request->text
        ]);

        return response()->json(['comment' => $comment]);
    }
}
