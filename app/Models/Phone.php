<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Phone extends Model
{
    use HasFactory;

    // inverse one to one relationship
    public function user(){
        return $this->belongsTo(User::class);
    }
}
