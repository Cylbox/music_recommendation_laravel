<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSong extends Model
{
    use HasFactory;

    protected $guarded = '';

    protected $table = 'user_song';
}
