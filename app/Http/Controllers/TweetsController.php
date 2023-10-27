<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tweet;

class TweetsController extends Controller
{
    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        // Validate the tweet content
        $this->validate($request, [
            'content' => 'required|max:255',
        ]);

        // Create a new tweet
        $tweet = new Tweet();
        $tweet->content = $request->input('content');
        $tweet->user_id = auth()->user()->id; // Assuming you are using user authentication

        $tweet->save();

        return redirect()->route('tweets.index');
    }

    public function index()
    {
        // Retrieve all tweets from the database
        $tweets = Tweet::latest()->get(); // Use the correct namespace 'App\Models\Tweet'
    
        return view('tweets.index', compact('tweets'));
    }
}
