<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function commentPolies(){
        // return $this->hasMany(Comment::class);
// Polymorphic One to Many | morphMany & morphTo
        return $this->morphMany(CommentPoly::class,'commentable');
    }
}
