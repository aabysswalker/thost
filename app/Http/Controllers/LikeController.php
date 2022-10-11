<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function index(Request $request, $id)
    {
        Like::create(['liked' => 1, 'user_id' => Auth::user()->id, 'video_id' => $id]);
    }
}
