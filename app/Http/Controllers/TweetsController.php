<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Http\Controllers\CommentController;

class TweetsController extends Controller
{
    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        // Validate tweet fields (title, content, etc.)
    
       
    
        $tweet = new Tweet([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
    
        // Save the tweet to the database
        $tweet->save();
    
        // Redirect or return a response
    }
    

    public function index()
    {
        // Retrieve all tweets from the database
        $tweets = Tweet::latest()->get(); // Use the correct namespace 'App\Models\Tweet'
    
        return view('tweets.index', compact('tweets'));
    }
}
