<?php

namespace App\Repositories\Interfaces;

interface VideoRepositoryInterface 
{
    public function createVideo($data);
    public function showVideo($id);
}