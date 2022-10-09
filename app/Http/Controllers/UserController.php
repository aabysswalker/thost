<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct(private UserRepositoryInterface $userRepository) 
    {
    }

    public function index() 
    {
        return Auth::user()->name;
    }

    public function show($id) 
    {
        return $this->userRepository->showUser($id);
    }
}
