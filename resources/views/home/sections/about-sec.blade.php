<div class="container">
    @foreach($abouts as $about)
    <br>
    <img class="img-fluid" src="{{ asset($about->image) }}" alt="{{ asset($about->image) }}">
    <br>
    <br>
    <p>{!! str_limit($about->body, $limit = 150, $end = '...') !!}</p>
    <a href="{{ url('about') }}" class="btn btn-dark">Read more</a>
    @endforeach
</div>

