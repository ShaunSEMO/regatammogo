<div data-aos="zoom-in-up" class="container sec-cont">
    <h1 class="sec-heading">About us</h1>
    <hr class="heading-ul">
        <br>
    @foreach($abouts as $about)
            <br>
        <img id="about-img" class="img-fluid" src="{{ asset($about->image) }}" alt="{{ asset($about->image) }}">
            <br>
            <br>
        <p id="about-p">{!! str_limit($about->body, $limit = 250, $end = '...') !!}</p>
        <br>
        <a class="btn btn-dark site-btn" href="{{ url('about') }}">Read more</a>
    @endforeach
</div>

