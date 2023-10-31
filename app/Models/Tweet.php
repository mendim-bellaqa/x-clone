<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User; // Make sure User model is imported

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id']; // Add 'title' to the fillable array

    // Define relationships and methods here

    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'tweet_id', 'user_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
