<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p>Author: {{ $post->author }}</p>


<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p>Author: {{ $post->author }}</p>

<h2>Comments</h2>
@foreach ($post->comments as $comment)
    <div>
        <strong>{{ $comment->name }}</strong>
        <p>{{ $comment->comment }}</p>
    </div>
@endforeach

<h2>Add a Comment</h2>
<form method="POST" action="{{ route('comments.store') }}">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment"></textarea>
    </div>
    <button type="submit">Submit</button>
</form>

