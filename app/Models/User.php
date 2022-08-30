<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Model
{
    use HasFactory;


    public function role(){
        return $this->belongsTo(Role::class);
    }
}
