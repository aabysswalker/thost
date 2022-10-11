<?php

namespace App\Repositories;

use App\Models\Like;
use App\Models\Video;
use App\Models\Comment;
use App\Repositories\Interfaces\VideoRepositoryInterface;

class VideoRepository implements VideoRepositoryInterface {

    public function showForm() {
        return view('upload');
    }

    public function createVideo($data) 
    {
        Video::create($data);
        return redirect('/api/me');
    }

    public function showVideo($id)
    {
        $video = Video::where('id', $id)->get();

        $comments = Comment::whereBelongsTo($video)->get();

        $likes = Like::whereBelongsTo($video)->get();

        $user = Video::find(1)->user()->get();

        return view('video', ['video' => $video, 'comments' => $comments, 'user' => $user, 'likes' => $likes]);
    }
}