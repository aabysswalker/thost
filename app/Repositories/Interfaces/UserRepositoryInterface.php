<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface 
{
    public function showUser($id);
    public function showCurrentUser();
}