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
    <br>
    <br>
    <div class="container">
        <h1 style="color: lightslategray;">"Our moto is that no sports advancement without educational excellence and adequate life skills."</h1>
    </div>
    <br>
    <br>
    @include('home.sections.sponsors-sec')
    <br>
    @include('home.sections.contact-sec')
    <br>

@endsection
