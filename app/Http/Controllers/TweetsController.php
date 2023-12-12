<?php

namespace App\Http\Controllers;
use App\Models\Video;
use App\Models\Image;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\CommentController;
use App\Models\Media;

class TweetsController extends Controller
{
    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
        {
            $request->validate([
                'content' => 'nullable|string|max:255',
                'media' => 'nullable|mimes:jpeg,jpg,png,mp4|max:10240',
            ]);

            $tweet = new Tweet([
                'content' => $request->input('content'),
                'user_id' => auth()->user()->id,
            ]);

            $tweet->save();

            // Handle media upload (image or video) if provided
            if ($request->hasFile('media')) {
                $mediaPath = $request->file('media')->store('media', 'public');

                // Determine whether it's an image or video based on the file extension
                $extension = $request->file('media')->getClientOriginalExtension();

                if (in_array($extension, ['jpeg', 'jpg', 'png'])) {
                    // It's an image
                    $media = new Image([
                        'url' => $mediaPath,
                    ]);
                } elseif ($extension === 'mp4') {
                    // It's a video
                    $media = new Video([
                        'url' => $mediaPath,
                    ]);
                }

                // Save the media relation and associate it with the tweet
                $tweet->media()->save($media);
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
                    'media' => 'nullable|mimes:jpeg,jpg,png,mp4|max:10240', // Adjust the validation rules
                    // Other validation rules for image, if needed
                ]);

                // Update the tweet's content
                $tweet->update([
                    'content' => $request->input('content'),
                ]);

                // Handle media upload if provided
                if ($request->hasFile('media')) {
                    $mediaPath = $request->file('media')->store('media', 'public');

                    // Determine whether it's an image or video based on the file extension
                    $extension = $request->file('media')->getClientOriginalExtension();

                    if (in_array($extension, ['jpeg', 'jpg', 'png'])) {
                        // It's an image
                        $media = new Image([
                            'url' => $mediaPath,
                        ]);
                    } elseif ($extension === 'mp4') {
                        // It's a video
                        $media = new Video([
                            'url' => $mediaPath,
                        ]);
                    }

                    // Save the media relation and associate it with the tweet
                    $tweet->media()->save($media);
                }

                return redirect()->route('home')->with('success', 'Tweet updated successfully!');
            }


    public function index()
    {
        $tweets = Tweet::with('images')->latest()->get();
    
        return view('tweets.index', compact('tweets'));
    }
}
