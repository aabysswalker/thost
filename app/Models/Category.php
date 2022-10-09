<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'video_id'];

    public function video() 
    {
        return $this->belongsTo(Video::class);
    }
}
