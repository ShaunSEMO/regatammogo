@extends('layouts.index')

@section('about')

    <br>
    <div class="container sec-cont">
        <h1 class="sec-heading">Programs offered</h1>
        <hr class="heading-ul">
        <br>
        <div class="row">
            @foreach($programs as $program)
                <div data-aos="fade-up" class="container col-lg-6 col-md-6"> 
                    <div class="container">
                        <img id="program-img" class="img-fluid" src="{{ asset($program->image) }}" alt="{{ url($program->image) }}">
                            <br>
                            <br>
                        <h2>{!! $program->title!!}</h2>
                        <hr class="sub-ul">
                        <p>{!! $program->body!!}</p>
                            <br>
                    </div>
                </div>
            @endforeach
        </div>
        @include('home.sections.sponsors-sec')
        <br>
        @include('home.sections.contact-sec')
        <br>
    </div>

@endsection