<?php

namespace App\Http\Controllers\Tweets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Tweet;
class LikeConntroller extends Controller
{
   // LikeController.php

   public function store(Tweet $tweet)
{
    $tweet->likes()->create(['user_id' => auth()->id()]);
    return response(['message' => 'Liked!']);
}

public function destroy(Tweet $tweet)
{
    $tweet->likes()->where('user_id', auth()->id())->delete();
    return response(['message' => 'Unliked!']);
}


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
