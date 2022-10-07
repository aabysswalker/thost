<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class CommentController extends Controller
{

    public function __construct(private CommentRepositoryInterface $commentRepository)
    {
    }

    public function store(Request $request, $id) 
    {
        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'video_id' => $id,
            'user_id' => Auth::user()->id,
        ];

        return $this->commentRepository->createComment($data);
    }
}
