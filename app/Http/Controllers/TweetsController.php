<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\CommentController;

class TweetsController extends Controller
{
    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'nullable|string|max:255', // content is optional
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional
        ]);
    
        // Create a new tweet
        $tweet = new Tweet([
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
        ]);
    
        $tweet->save();
    
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $image = new Image([
                'url' => $imagePath,
            ]);
            $tweet->images()->save($image);
        }
    
        return redirect()->back()->with('success', 'Tweet created successfully!');
    }

    public function edit(Tweet $tweet)
    {
        return view('tweets.edit', compact('tweet'));
    }

    public function destroy(Tweet $tweet)
    {
        // Ensure the authenticated user is authorized to delete the tweet
        if (auth()->user()->id !== $tweet->user_id) {
            return back()->with('error', 'You are not authorized to delete this tweet');
        }
    
        // Handle image deletion (if necessary)
        if ($tweet->images()->count() > 0) {
            // You may want to delete the associated image file here
            // You can use the `Storage` facade to delete files from the storage disk
            // Example: Storage::disk('public')->delete($tweet->images->first()->url);
    
            // Delete the tweet's images from the database
            $tweet->images()->delete();
        }
    
        // Delete the tweet
        $tweet->delete();
    
        return redirect()->route('home')->with('success', 'Tweet deleted successfully');
    }
    
    
    public function update(Request $request, Tweet $tweet)
            {
                $request->validate([
                    'content' => 'nullable|string|max:255',
                    // Other validation rules for image, if needed
                ]);

                // Update the tweet's content
                $tweet->update([
                    'content' => $request->input('content'),
                ]);

                // Handle image upload if provided
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('images', 'public');
                    $image = new Image([
                        'url' => $imagePath,
                    ]);
                    $tweet->images()->save($image);
                }
                session(['tweet_id' => $tweet->id]);
                return redirect()->route('home')->with('success', 'Tweet updated successfully!');
            }



    public function index()
    {
        // Retrieve all tweets from the database
        $tweets = Tweet::latest()->get(); // Use the correct namespace 'App\Models\Tweet'
    
        return view('tweets.index', compact('tweets'));
    }
}
