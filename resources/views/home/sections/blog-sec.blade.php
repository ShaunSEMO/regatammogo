    <div class="container">
        <h2>Blog</h2>
        @foreach($posts as $post)
        <br>
        <small>{{ \Carbon\Carbon::parse($post->date)->format('d - m - Y')}}
        </small>
        <br>
        <img style="width:50%;" class="img-fluid" src="{{ asset($post->image) }}" alt="Post header image">
        <h1>{!! $post->title !!}</h1>
        <br>
        <p>{!! str_limit($post->body, $limit = 20, $end = '...') !!}</p>
        <br>
        <a href="blog/{{ $post->id }}">Read More</a>
        <br><hr>
        @endforeach
        <a href="{{ url('blog') }}" class="btn btn-dark">Go to blog</a>
    </div>
