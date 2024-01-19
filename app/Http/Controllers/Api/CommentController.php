<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('parentComment', 'replies')->get();
        return response()->json(['comments' => $comments]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment_id' => 'nullable|exists:comments,id',
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'text' => 'required|string',
        ]);

        $comment = Comment::query()->create($request->all());

        return response()->json(['comment' => $comment]);
    }
}
