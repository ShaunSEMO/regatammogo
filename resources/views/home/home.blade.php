@extends('layouts.index')

@section('home')

@include('home.sections.about-sec')
<br>
@include('home.sections.events-sec')
<br>
@include('home.sections.programs-sec')
<br>
<br>
<div data-aos="fade-up" class="container moto-cont">
    <h1 class="bg-text" style="color: lightslategray;">"Our moto is that no sports advancement without educational excellence and adequate life skills."</h1>
</div>
<br>
<br>
@include('home.sections.sponsors-sec')
<br>
<br>
@include('home.sections.contact-sec')
<br>

@endsection
