<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Tweet; // Make sure Tweet model is imported

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['url']; // Add 'url' to the fillable array

    // Define relationships and methods here

    public function tweet()
    {
        return $this->belongsTo(Tweet::class);
    }
}
