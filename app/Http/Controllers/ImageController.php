<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Tweet;
class ImageController extends Controller
{
    /**
     * Store a new image for a tweet.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'tweet_id' => 'required|exists:tweets,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new Image instance
        $image = new Image([
            'url' => $imagePath,
        ]);

        // Associate the image with the specified tweet
        $tweet = Tweet::findOrFail($request->input('tweet_id'));
        $tweet->images()->save($image);

        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }

    /**
     * Delete an image.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the image by ID
        $image = Image::findOrFail($id);

        // Delete the image file from storage (optional)
        // Storage::disk('public')->delete($image->url);

        // Delete the image record
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully!');
    }
}
