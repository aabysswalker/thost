<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\VideoRepositoryInterface;

class VideoController extends Controller
{

    public function __construct(private VideoRepositoryInterface $videoRepository)
    {
    }

    public function store(Request $request) 
    {
        $data = [
            'title' => $request->input('title'),
            'length' => $request->input('length'),
            'user_id' => Auth::user()->id,
        ];

        return $this->videoRepository->createVideo($data);
    }
}
