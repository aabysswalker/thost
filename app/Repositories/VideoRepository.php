<?php

namespace App\Repositories;

use App\Models\Video;
use App\Models\Comment;
use App\Repositories\Interfaces\VideoRepositoryInterface;

class VideoRepository implements VideoRepositoryInterface {

    public function createVideo($data) 
    {
        return Video::create($data);
    }

    public function showVideo($id)
    {
        $video = Video::where('id', $id)->get();

        $comments = Comment::whereBelongsTo($video)->get();

        return [$video, $comments];
    }
}