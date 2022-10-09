<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Video;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {

    public function showUser($id)
    {
        $user = User::where('id', $id)->get();

        $videos = Video::whereBelongsTo($user)->get();

        return [$user, $videos];
    }
}