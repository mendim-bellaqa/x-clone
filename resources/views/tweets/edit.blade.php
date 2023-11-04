<!-- tweets/timeline.blade.php -->

@foreach($tweets as $tweet)
    <div class="tweet">
        <p>{{ $tweet->content }}</p>
        @if ($tweet->user)
        <p>Posted by {{ $tweet->user->name }}</p>
        @endif
        <div>
            @if ($tweet->likedBy(auth()->user()))
                <form method="POST" action="/tweets/{{ $tweet->id }}/unlike">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Unlike</button>
                </form>
            @else
                <form method="POST" action="/tweets/{{ $tweet->id }}/like">
                    @csrf
                    <button type="submit">Like</button>
                </form>
            @endif
            <span>{{ $tweet->likes->count() }} Likes</span>
        </div>
    </div>
@endforeach
