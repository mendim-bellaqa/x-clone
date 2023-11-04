<?php

namespace App\Http\Controllers\Tweets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Tweet;
class LikeConntroller extends Controller
{
   // LikeController.php
         public function like(Tweet $tweet)
         {
            auth()->user()->likes()->attach($tweet);
            return response()->json(['message' => 'Liked']);
         }
         
         public function unlike(Tweet $tweet)
         {
            auth()->user()->likes()->detach($tweet);
            return response()->json(['message' => 'Unliked']);
         }

}
