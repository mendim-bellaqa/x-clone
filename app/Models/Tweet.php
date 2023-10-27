<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tweet extends Model
{
    use HasFactory;
    // User.php
    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function timeline()
    {
        return Tweet::whereIn('user_id', $this->follows->pluck('id'))
            ->orWhere('user_id', $this->id)
            ->latest()
            ->get();
    }

}