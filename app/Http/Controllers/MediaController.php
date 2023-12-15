<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function store(Request $request)
{
    // Validation logic for media upload

    $mediaPath = $request->file('media')->store('media', 'public');
    $type = pathinfo($mediaPath, PATHINFO_EXTENSION) === 'mp4' ? 'video' : 'image';

    $media = new Media([
        'url' => $mediaPath,
        'type' => $type,
    ]);

    // Assuming tweet_id is provided in the request
    $tweet = Tweet::findOrFail($request->input('tweet_id'));
    $tweet->media()->save($media);

    return redirect()->back()->with('success', 'Media uploaded successfully!');
}
}
