@extends('layouts.index')

@section('about')

    <div data-aos="zoom-in-up" class="container sec-cont">
        <h1 class="sec-heading">About us</h1>
        <hr class="heading-ul">
        <br>
            @foreach($abouts as $about)
            <br>
            <img id="about-img" class="img-fluid" src="{{ asset($about->image) }}" alt="Post header image">
            <br>
            <br>
            <p id="about-p">{!! $about->body!!}</p>
            <br>
            @endforeach
    </div>
    <br>
    <br>
    <div data-aos="fade-up" class="container">
        <h1 class="bg-text" style="color: lightslategray;">"Our moto is that no sports advancement without educational excellence and adequate life skills."</h1>
    </div>
    <br>
    <br>
    @include('home.sections.sponsors-sec')
    <br>
    @include('home.sections.contact-sec')
    <br>

@endsection
