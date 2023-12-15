<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User; // Make sure User model is imported
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Media;


class Tweet extends Model
    {
        use HasFactory;

        protected $fillable = ['title', 'content', 'user_id','video_path']; // Add 'title' to the fillable array

        // Define relationships and methods here

        public function likedBy(User $user)
        {
            return $this->likes->contains('user_id', $user->id);
        }

        public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function images() {
        return $this->morphMany(Image::class, 'mediable');
    }

    public function media() {
        return $this->hasMany(Media::class);
    }
}
