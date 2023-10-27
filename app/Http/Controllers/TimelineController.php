<?php

namespace App\Http\Controllers\Tweets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tweet;
class TimelineController extends Controller
{
     // TimelineController.php
    public function index()
    {
        $tweets = auth()->user()->timeline();
        return view('tweets.timeline', compact('tweets'));
    }

}
