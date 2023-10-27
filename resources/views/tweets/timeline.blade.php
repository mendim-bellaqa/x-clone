@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($tweets as $tweet)
            <div class="tweet">
                <p>{{ $tweet->content }}</p>
                <p>Posted by {{ $tweet->user->name }}</p>
            </div>
        @endforeach
    </div>
@endsection
