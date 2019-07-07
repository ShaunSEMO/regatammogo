@extends('layouts.index')

@section('about')

    <br>
    <div class="container">
        <h1>Programs offered</h1>
        <br>
        @foreach($programs as $program)
            <img style="width:50%;" class="img-fluid" src="{{ asset($program->image) }}" alt="{{ url($program->image) }}">
            <br>
            <br>
            <h5>{!! $program->title!!}</h5>
            <br>
            <p>{!! $program->body!!}</p>
            <br>
        @endforeach
        @include('home.sections.sponsors-sec')
        <br>
        @include('home.sections.contact-sec')
        <br>
    </div>

@endsection