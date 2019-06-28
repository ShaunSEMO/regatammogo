@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align:center;">Admin Panel</h1>

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Blog</h3></div>

                <div style="text-align:center" class="card-body">
                    <a href="{{ url('/t@k3m3t0@dm!n/create') }}" class="btn btn-primary">Create new post</a>
                        <div class="container">
                            @foreach($posts as $post)
                            <div class="container">
                                <br>
                                <small>{{ \Carbon\Carbon::parse($post->date)->format('d - m - Y')}}
                                </small>
                                <br>
                                <img style="width:50%;" class="img-fluid" src="{{ asset($post->image) }}" alt="Post header image">
                                <h1>{!! $post->title !!}</h1>
                                <br>
                                <p>{!! str_limit($post->body, $limit = 150, $end = '...') !!}</p>
                                <br>
                                <a href="/valrey/public/blog/{{ $post->id }}">Read More</a>
                                <br><hr>
                            </div>
                            @endforeach
                            {{ $posts->links() }}
                        </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
