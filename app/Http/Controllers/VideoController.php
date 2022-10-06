<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function store(Request $request) {

        $credentials = [
            'title' => $request->input('title'),
            'length' => $request->input('length'),
            'user_id' => Auth::user()->id,
        ];

        return Video::create($credentials);
    }
}
