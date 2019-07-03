@extends('layouts.index')

@section('about')

    <div class="container">
            @foreach($abouts as $about)
            <br>
            <img style="width:50%;" class="img-fluid" src="{{ asset($about->image) }}" alt="Post header image">
            <br>
            <br>
            <p>{!! $about->body!!}</p>
            <br>
            @endforeach
    </div>

@endsection
