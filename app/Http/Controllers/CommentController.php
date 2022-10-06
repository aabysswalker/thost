<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id) {
        
        $credentials = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'video_id' => $id,
            'user_id' => Auth::user()->id,
        ];

        return Comment::create($credentials);
    }
}
