<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phone;
use App\Models\UserRole;
use App\Models\Role;

class User extends Model
{
    use HasFactory;

    // public function phone(){
    //     return $this->hasOne(Phone::class);
    // }

    public function roles(){
        return $this->belongsToMany(Role::class,UserRole::class);
    }
}
