<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FBUserInfo extends Model
{
    use HasFactory;
    protected $table = 'users_info';
    protected $fillable = ['profile_id', 'username', 'email'];
}
