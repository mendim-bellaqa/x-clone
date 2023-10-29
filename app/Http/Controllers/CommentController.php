<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Egulias\EmailValidator\Warning\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Tweet $tweet)
{
    // Validate the comment input
    $request->validate([
        'comment' => 'required|string',
    ]);

    // Create a new comment associated with the tweet
    $comment = new Comment([
        'body' => $request->input('comment'),
    ]);

    $comment->user()->associate(auth()->user()); // Associate the comment with the logged-in user
    $comment->tweet()->associate($tweet); // Associate the comment with the tweet

    $comment->save();

    // Redirect or return a response
}

}
