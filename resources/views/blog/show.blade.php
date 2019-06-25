@extends('layouts.index')

@section('blog')
    <div class="container">
        <br>
        <small>{{ $post->date }}</small>
        <br>
        <img style="width:50%;" class="img-fluid" src="{{ asset($post->image) }}" alt="Post header image">
        <h1>{!! $post->title !!}</h1>
        <br>
        <p>{!! $post->body !!}</p>
        <hr>
        <a href="{{ url('blog/'.$post->id.'/edit') }}" class="btn btn-primary">Edit</a>
        {!! Form::open(['action' => ['BlogController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
@endsection
