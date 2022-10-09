<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\VideoRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface {

    public function getCategoryById($id) 
    {
        return Category::where('id', $id);
    }
}