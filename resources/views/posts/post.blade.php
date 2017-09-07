<div class="blog-post">

    <h2 class="blog-post-title">

        <a class="link" href="/posts/{{ $post->id }}">

            {{ $post->title }}

        </a>

    </h2>
    {{--Create time posts --}}
    <p class="blog-post-meta">

        {{ $post->author_name }} on

        {{ $post->created_at->toFormattedDateString() }}
    </p>
    <img class="post-photo" src={{ "/img/" . $post->thumbnail }} alt=""><br>


    <div class="form-group">
        {{ $post->body }}

    </div>


</div>

