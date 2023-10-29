<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()   
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
     {
         // Get the currently authenticated user
         $user = auth()->user();
     
         // Retrieve all tweets from the database, ordered by created_at in descending order
         $tweets = Tweet::latest()->get();
     
         // Pass the $tweets and $user variables to the view
         return view('welcome', ['tweets' => $tweets, 'user' => $user]);
     }
     

    
}
