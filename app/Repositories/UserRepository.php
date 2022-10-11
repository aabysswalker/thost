<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {

    public function showUser($id)
    {
        $user = User::where('id', $id)->get();

        $videos = Video::whereBelongsTo($user)->get();

        return view('user', ['userName' => $user->map->only(['name']), "videos" => $videos]);
    }

    public function showCurrentUser()
    {
        $user = User::where('id', Auth::user()->id)->get();

        $videos = Video::whereBelongsTo($user)->get();

        return view('user', ["videos" => $videos]);
    }
}