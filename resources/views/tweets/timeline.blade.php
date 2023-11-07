<!-- tweets/timeline.blade.php -->

@foreach($tweets as $tweet)
    <div class="tweet">
        <p>{{ $tweet->content }}</p>
        @if ($tweet->user)
            <p>Posted by {{ $tweet->user->name }}</p>
        @endif

        <!-- Add your like/unlike buttons here -->
    </div>
@endforeach
