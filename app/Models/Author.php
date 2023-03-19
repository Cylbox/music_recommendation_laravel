<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function songs(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Song::class, 'songable');
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(User::class, 'userable');
    }
}
